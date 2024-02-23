<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Payment;

class StripeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function checkout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $cartItems = $request->session()->get('cart', []);

        if (empty($cartItems)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }

        $lineItems = [];
        $totalAmount = 0;

        foreach ($cartItems as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $item['name'],
                    ],
                    'unit_amount' => $item['price'] * 100,
                ],
                'quantity' => $item['quantity'],
            ];

            $totalAmount += $item['price'] * $item['quantity'];
        }

        $order = new Order();
        $order->status = 'pending';
        $order->user_id = auth()->id();
        $order->total = $totalAmount;
        $order->save();

        foreach ($cartItems as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $item['product_id'] ?? null;
            $orderDetail->quantity = $item['quantity'];
            $orderDetail->unit_price = $item['price'];
            $orderDetail->save();
        }
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
            'metadata' => ['order' => $order],
        ]);
        session()->put('order_id', $order->id);
        return redirect($session->url);
    }

    public function success(Request $request)
    {
        $orderId = session()->get('order_id');

        if (!$orderId) {
            return redirect()->route('home')->with('error', 'Order ID not found in session.');
        }
        $order = Order::find($orderId);

        $order->status = 'processing';
        $order->save();

        // Créer un nouveau paiement
        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->payment_id = $request->input('payment_intent');
        $payment->numero_serie = $order->metadata->numero_serie ?? null;
        $payment->quantity = $order->metadata->quantity ?? null;
        $payment->amount = $order->total;
        $payment->currency = 'usd';
        $payment->payment_status = 'succeeded';
        $payment->payment_method = $request->input('payment_method');
        $payment->save();


        // Retourner la vue de succès
        return view('success');
    }


    public function cancel()
    {
        return view('cancel');
    }
}