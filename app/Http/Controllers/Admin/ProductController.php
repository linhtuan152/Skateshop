<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.list',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            ['name_pro'=> 'required','price_pro'=> 'required','img'=> 'required'],
            ['name_pro.required'=>'Không được để trống tên sản phẩm !','price_pro.required'=>'Không được để trống giá sản phẩm !','img.required'=>'Không được để trống ảnh sản phẩm !']
        );
        // dd($request);
        $product = new Product;
        $product->id_cat = $request->id_cat;
        $product->name_pro = $request->name_pro;
        $product->price_pro = $request->price_pro;
        $product->sale_price_pro = $request->sale_price_pro;
        $product->img = $request->img;
        $product->description = $request->description;

        $product->save($request->all());
        return redirect()->route('list-pro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            ['name_pro'=> 'required','price_pro'=> 'required','img'=> 'required'],
            ['name_pro.required'=>'Không được để trống tên sản phẩm !','price_pro.required'=>'Không được để trống giá sản phẩm !','img.required'=>'Không được để trống ảnh sản phẩm !']
        );

        // dd($request);
        Product::find($id)->update($request->all());
        return redirect()->route('list-pro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('list-pro');
    }
}
