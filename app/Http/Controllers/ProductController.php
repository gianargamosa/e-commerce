<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Products;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Products::all();
        return view('products.index', compact('products'));
        // return $products;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products/create');
    }

    /**
     * Add to cart function.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtocart(Request $request, $id)
    {
        //
        $products_data = Products::find($id);
        // return $products_data;
        $old_cart = Session::has('cart') ? Session::get('cart') : null;


        $cart = new Cart($old_cart);
        // return $cart;
        $cart->add($products_data, $products_data->id);
        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect('/products');
    }

    /**
     * Add to cart function.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $old_cart = Session::get('cart');
        $cart = new Cart($old_cart);
        // dd($cart->items);
        // return $cart->total_price;
        return view('shop.shopping-cart', ['products' => $cart->items, 'total_price' => $cart->total_price]);
    }

    /**
     * Add to cart function.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $old_cart = Session::get('cart');
        $cart = new Cart($old_cart);
        $total_price = $cart->total_price;
        // dd($cart->items);
        // return $cart->total_price;
        return view('shop.checkout', ['total_price' => $total_price]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $this->validate($request, [
            'product_name' => 'required', 
            'product_image' => 'required', 
            'product_description' => 'required', 
            'amount' => 'required', 
            'category' => 'required',
            ]);


        $products_data = $request->all();
        Products::create($products_data);

        
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products_data = Products::where('id', $id)->first();
        return view('products.edit')->with('products', $products_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $products_data = Products::where('id', $id)->first();
        $products_data->update($request->all());
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products_data = Products::where('id', $id)->first();
        $products_data->delete();
        return redirect('/products');
    }
}
