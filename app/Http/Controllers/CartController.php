<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{
    public function showCart()
    {
        $cartItems = json_decode(request()->cookie('cart'), true) ?? [];
        return view('cart', ['cartItems' => $cartItems]);
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $cart = json_decode($request->cookie('cart'), true) ?? [];
        $cart[] = $product;

        return Response::json(['message' => 'Product added to cart'])->cookie('cart', json_encode($cart));
    }
}