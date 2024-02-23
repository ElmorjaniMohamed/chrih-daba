<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(8);
        return view('product-list', compact('products'))->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function search(Request $request)
    {
        $query = $request->search_string;

        $products = Product::where('name', 'like', "%" . $query . "%")->get();

        return response()->json($products);
    }



    public function filtrerParCategory($category)
    {
        $produits = Product::where('category', $category)->get();
        return response()->json($produits);
    }

    public function filtrerParPrice($price)
    {
        $produits = Product::where('price', $price)->get();
        return response()->json($produits);
    }

    public function filtrerParBrand($brand)
    {
        $produits = Product::where('brand', $brand)->get();
        return response()->json($produits);
    }
}