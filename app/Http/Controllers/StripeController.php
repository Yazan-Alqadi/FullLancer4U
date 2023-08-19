<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Customer;
use Stripe\Stripe;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StripeController extends Controller
{
    //

    public function index()
    {

        return view('payment');
    }
    public function checkout(Profession $service)
    {


        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET')
        );

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $service->title,
                    ],
                    'unit_amount' => intval($service->price) * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost:8000/stripe/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'http://localhost:8000/stripe/cancel',
        ]);

        Order::create([
            'price' => intval($service->price),
            'status' => 'unpaid',
            'user_id' => Auth::id(),
            'freelancer_id' => $service->freelancer->id,
            'service_id' => $service->id,
            'session_id' => $checkout_session->id,

        ]);


        return redirect($checkout_session->url);
    }


    public function success(Request $request)
    {


            Stripe::setApiKey(env('STRIPE_SECRET'));
            $sessionId  = $request->get('session_id');


            $session = Session::retrieve($sessionId);

            if (!$session) {
                throw new NotFoundHttpException;
            }


            $order =  Order::where('session_id', $session->id)->where('status', 'unpaid')->first();

            if (!$order) {
                throw new NotFoundHttpException;
            }
            $order->status = 'pinding';
            $order->save();

            $not = Notification::create([
                'title' => 'Payment done for your service',
                'content' => 'Your service' . $order->service->title . 'has been paid for by ' . $order->user->user_name. 'You can now start work',
                'user_id' => $order->service->freelancer->user->id,
                'reciver_id' => $order->user_id,
                'type' => 'message',
                're_id' => $order->service_id,
            ]);
            $user = User::findOrFail($not->user_id);
            $user->balance += $order->price;
            $user->save();
            event(new NewMessage($not->user_id, $not->title, $not->content));

            session()->flash('message', 'Payment Success');
            return redirect()->route('more_information', $order->service_id);

    }


    public function cancel(Request $request)
    {
        return back();
    }
}
