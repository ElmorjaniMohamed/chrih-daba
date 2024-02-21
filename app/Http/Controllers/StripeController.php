<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function checkout(Request $request){
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
        $lineItems[] = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => "DELL",
                ],
                'unit_amount' => 32 * 100,
            ],
            'quantity' => 1,
        ];
    
        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);
    
        return redirect($session->url);
    }
    

    public function success(){
        return view('success');
    }

    public function cancel(){
        return view('cancel');
    }
}
