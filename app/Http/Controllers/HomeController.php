<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(4);
        return view('home', compact('products'))->with('i', (request()->input('page', 1) - 1) * 4);
    }


    public function overview($id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('overview', compact('product'));
        } catch (ModelNotFoundException $e) {

            return redirect()->route('overview')->with('error', 'Product not found.');
        }
    }



}