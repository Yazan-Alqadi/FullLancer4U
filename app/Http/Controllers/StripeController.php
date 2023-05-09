<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
    public function checkout()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51MxUUVCNdsP2o8KARcI4n3t3v09bjwbZ1tcFpQWLDG0CbgFyVkRLh2FZcBk4Mx7H59dGr3dqJndSsjhPvc7k5Hdf00BZsh8Wlk'
        );

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost:8000/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'http://localhost:8000/cancel',
        ]);

        Order::create([
            'price' => 10,
            'status' => 'unpaid',
            'user_id'=> Auth::id(),
            'service_id' => 1,
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
            $order->status = 'paid';
            $order->save();
        } catch (\Throwable $th) {
            throw new NotFoundHttpException;
        }
    }
    public function cancel(Request $request)
    {
        return back();
    }
}
