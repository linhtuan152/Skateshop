<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
// use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class HomeController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        // $product = Product::inRandomOrder()->limit(4)->get();
        $deck = Product::inRandomOrder()->limit(4)->where('id_cat',1)->get();
        $truck = Product::inRandomOrder()->limit(4)->where('id_cat',2)->get();
        $wheels = Product::inRandomOrder()->limit(4)->where('id_cat',3)->get();
        $bearings = Product::inRandomOrder()->limit(4)->where('id_cat',4)->get();
        $griptape = Product::inRandomOrder()->limit(4)->where('id_cat',5)->get();
        //-------CART-----
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        return view('home',compact('category','deck','truck','wheels','griptape','bearings','cart','total'));
    }
    public function showContact(){
       $cart = Session::get('cart');
       $total = 0;
        // return dd($cart);
       if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
     return view('contact-us',compact('cart','total'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function showAcc()
    {
        $user = Auth::user();
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        return view('my-account',compact('user','cart','total'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
    public function showShop(){
        $category = Category::all();
        $brand = DB::table('product')->distinct()->pluck('description');
        $product = Product::inRandomOrder()->limit(6)->get();
        $url = url()->current();
        $urlS = 'http://localhost:4567/demo/shop';
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        // return echo "<pre>";
        // return dd($url);
        return view('shop',compact('category','brand','product','url','urlS','cart','total'));
    }
    public function showDeck(){
        $category = Category::all();
        $deck = DB::table('product')->where('id_cat',1)->get();
        $brand = DB::table('product')->distinct()->pluck('description');
        $url = url()->current();
        $urlS = 'http://localhost:4567/demo/shop';
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        // return echo "<pre>";
        // return dd($deck);
        return view('shop_content.deck',compact('category','deck','brand','url','urlS','cart','total'));
    }
    public function showTruck(){
        $category = Category::all();
        $truck = DB::table('product')->where('id_cat',2)->get();
        $brand = DB::table('product')->distinct()->pluck('description');
        $url = url()->current();
        $urlS = 'http://localhost:4567/demo/shop';
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        // return echo "<pre>";
        // return dd($truck);
        return view('shop_content.truck',compact('category','truck','brand','url','urlS','cart','total'));
    } public function showWheels(){
        $category = Category::all();
        $wheels = DB::table('product')->where('id_cat',3)->get();
        $brand = DB::table('product')->distinct()->pluck('description');
        $url = url()->current();
        $urlS = 'http://localhost:4567/demo/shop';
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        // return echo "<pre>";
        // return dd($deck);
        return view('shop_content.wheels',compact('category','wheels','brand','url','urlS','cart','total'));
    } public function showBearings(){
        $category = Category::all();
        $bearings = DB::table('product')->where('id_cat',4)->get();
        $brand = DB::table('product')->distinct()->pluck('description');
        $url = url()->current();
        $urlS = 'http://localhost:4567/demo/shop';
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        // return echo "<pre>";
        // return dd($deck);
        return view('shop_content.bearings',compact('category','bearings','brand','url','urlS','cart','total'));
    } public function showGriptape(){
        $category = Category::all();
        $griptape = DB::table('product')->where('id_cat',5)->get();
        $brand = DB::table('product')->distinct()->pluck('description');
        $url = url()->current();
        $urlS = 'http://localhost:4567/demo/shop';
        $cart = Session::get('cart');
        $total = 0;
        // return dd($cart);
        if (isset($cart)) {
            foreach ($cart as $value){
                $total += $value['quantity']*$value['price_pro'];
            }
        }
        // return echo "<pre>";
        // return dd($deck);
        return view('shop_content.griptape',compact('category','griptape','brand','url','urlS','cart','total'));
    }
}
