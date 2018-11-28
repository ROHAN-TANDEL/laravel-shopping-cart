<?php

namespace App\Http\Controllers;

use App\Product;

use App\Address;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;

use Log;

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
        
            /*Address::chunk(1, function ($addresses) {
            $i = 1;
            Log::emergency("called ".$i);
            foreach ($addresses as $address) {
                Log::emergency(++$i);
                Log::emergency($address);
            }
        });*/


        $all_products = Product::all();
        Redis::set('products', $all_products);
        $cache_products = Redis::get('products');
        return $cache_products;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products=Product::create($request->all());
        // dd($products);
        return response()->json($products, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {   
        //method: GET
        // localhost:8000/api/product/1 
        // dd($article);
        // dd($product->id);
        return Product::find($product->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $products)
    {
        Log::emergency('calling from update');
        $products = product::findOrFail($products->id);
        $products->update($products->all());
        return self::show($products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        Log::emergency('calling from destroy');
        $products = Product::findOrFail($products->id);
        $products->delete();

        return response()->json("deleted ".$products->id, 204);
    }
}
