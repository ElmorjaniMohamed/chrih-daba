<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $cartItem = [
            'product_id' => $product->id,
            'name' => $product->name,
            'brand' => $product->brand,
            'image' => $product->image,
            'price' => $product->price,
            'quantity' => 1,
        ];

        $cart = Session::get('cart', []);
        $cart[] = $cartItem;
        Session::put('cart', $cart);

        return Response::json(['message' => 'Product added to cart']);
    }

    public function showCart()
    {
        $cartItems = Session::get('cart', []);
        return view('cart', ['cartItems' => $cartItems]);
    }

    public function deleteProduct(Request $request, $productId)
    {
        $cart = Session::get('cart', []);

        $index = array_search($productId, array_column($cart, 'product_id'));

        if ($index !== false) {
            unset($cart[$index]);
            $cart = array_values($cart);
            Session::put('cart', $cart);
            return response()->json(['message' => 'Product removed from cart']);
        } else {
            return response()->json(['message' => 'Product not found in cart'], 404);
        }
    }
}