<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Profession;
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
                    'unit_amount' => intval($service->price),
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost:8000/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'http://localhost:8000/cancel',
        ]);

        Order::create([
            'price' => intval($service->price),
            'status' => 'unpaid',
            'user_id' => Auth::id(),
            'freelancer_id' => $service->freelancer_id,
            'service_id' => $service->id,
            'session_id' => $checkout_session->id,

        ]);


        return redirect($checkout_session->url);
    }


    public function success(Request $request)
    {

        try {
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

            session()->flash('message', 'Payment Success');
            return redirect()->route('more_information', $order->service_id);
        } catch (\Throwable $th) {
            throw new NotFoundHttpException;
        }
    }

    
    public function cancel(Request $request)
    {
        return back();
    }
}
