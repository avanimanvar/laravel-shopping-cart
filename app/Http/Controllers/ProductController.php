<?php

namespace App\Http\Controllers;

use App\Product;
use \Cart as Cart;
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
        $freeProduct = Product::where('product_type', '=', 1)->get();
        if (!empty($freeProduct)) {
            foreach ($freeProduct as $pro) {
                $duplicates = Cart::search(function ($cartItem, $rowId) use ($pro) {
                            return $cartItem->id == $pro->id;
                        });
                if ($duplicates->isEmpty()) {
                    Cart::add($pro->id, $pro->name, 1, $pro->price)->associate('App\Product');
                }
            }
        }

        $products = Product::all();
        return view('shop')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $interested = Product::where('slug', '!=', $slug)->get()->random(4);

        return view('product')->with(['product' => $product, 'interested' => $interested]);
    }

    public function add(Request $request)
    {
        return view('add_product');
    }


}
