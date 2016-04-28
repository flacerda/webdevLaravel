<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductsRequest;

use App\Product;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = \DB::table('products')->get();
        
        $products = Product::all();

        return view('products.index', ['data' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        //dd($request->input('title'));
        
        //dd($request->all());

       // $data = $request->all();
        //unset($data["_token"]);


        Product::create($request->all());

        // \DB::table('products')->insert($data);

        return redirect()->route('products.index'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $products = \DB::table('products')->where('id', $id)->first();
        
        $products = Product::find($id);
        return view('products.show', ["data"=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $products = \DB::table('products')->where('id', $id)->first();
        
        $products = Product::find($id);

        return view('products.edit', ["data"=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        // $data = $request->all();
         $product = Product::find($id);
         $product->update($request->all());
      //  \DB::table('products')->where('id', $id)->update($data);

        

        return redirect()->route('products.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // \DB::table('products')->where('id', $id)->delete();
        
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
