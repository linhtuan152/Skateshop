<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\product;

class CartController extends Controller
{
	public function showCart(){
		$product = Product::all();
		$cart = Session::get('cart');
		// return dd($cart);
		$total = 0;
		if (isset($cart)) {
			foreach ($cart as $value) {
				$total += $value['quantity']*$value['price_pro'];
			}
		}
		
		// return dd($total);
		return view('cart',compact('cart','total','product'));

	}
	public function addCart(Request $request, $id){

		$product = DB::select('select * from product where id_pro='.$id);
        // return dd($product[0]);
		$cart = Session::get('cart');
		// return dd($cart);
        // return dd(session()->has($id));
        // return dd(isset($cart));
		if(isset($cart)){
			if (array_key_exists($id, $cart)){
				$cart[$id] = array(
					"id_pro" => $cart[$id]["id_pro"],
					"name_pro" => $cart[$id]["name_pro"],
					"id_cat" => $cart[$id]['id_cat'],
					"price_pro" => $cart[$id]['price_pro'],
					"sale_price_pro" => $cart[$id]['sale_price_pro'],
					"img" => $cart[$id]['img'],
					"description" => $cart[$id]['description'],
					"quantity" => $cart[$id]['quantity'] + 1
				);
			}
			else{
				$cart[$id] = array(
					"id_pro" => $product[0]->id_pro,
					"name_pro" => $product[0]->name_pro,
					"id_cat" => $product[0]->id_cat,
					"price_pro" => $product[0]->price_pro,
					"sale_price_pro" => $product[0]->sale_price_pro,
					"img" => $product[0]->img,
					"description" => $product[0]->description,
					"quantity" => 1
				);
			}
		}
		else{
			$cart[$id] = array(
				"id_pro" => $product[0]->id_pro,
				"name_pro" => $product[0]->name_pro,
				"id_cat" => $product[0]->id_cat,
				"price_pro" => $product[0]->price_pro,
				"sale_price_pro" => $product[0]->sale_price_pro,
				"img" => $product[0]->img,
				"description" => $product[0]->description,
				"quantity" => 1
			);
			Session::put('cart', $cart);
		}
		
		Session::put('cart', $cart);
		Session::flash('success','Thêm sản phẩm thành công !');
        // return dd(Session::get('cart'));
		return redirect()->back();
	}
	
	public function updateCart(Request $cartdata)
	{
		$cart = Session::get('cart');
		$data = $cartdata->all();
		
		unset(($data)['_token']);
		// return dd($data);
		// return dd($cartdata->all());
		// return dd($cartdata->all());
		foreach ($data as $id => $val) 
		{
			if ($val > 0) {
				$cart[$id] = array(
					"id_pro" => $cart[$id]["id_pro"],
					"name_pro" => $cart[$id]["name_pro"],
					"id_cat" => $cart[$id]['id_cat'],
					"price_pro" => $cart[$id]['price_pro'],
					"sale_price_pro" => $cart[$id]['sale_price_pro'],
					"img" => $cart[$id]['img'],
					"description" => $cart[$id]['description'],
					"quantity" => $val
				);
				Session::put('cart',$cart);
				
			} else {
				unset($cart[$id]);
			}
		}
		Session::put('cart', $cart);
		return redirect()->back();
		// return dd($cartdata->all());

		// if(isset($_POST["id"]) && isset($_POST["number"])){
		// 	$id = $_POST["id"];
		// 	$number = $_POST["number"];
		// 	if(isset($cart)){
		// 		if(array_key_exists($id, $cart)){
		// 			if($number){
		// 				$cart[$id]= array(
		// 					"id_pro" => $cart[$id]["id_pro"],
		// 					"name_pro" => $cart[$id]["name_pro"],
		// 					"id_cat" => $cart[$id]['id_cat'],
		// 					"price_pro" => $cart[$id]['price_pro'],
		// 					"sale_price_pro" => $cart[$id]['sale_price_pro'],
		// 					"img" => $cart[$id]['img'],
		// 					"description" => $cart[$id]['description'],
		// 					'quantity'=> $number
		// 				);
		// 			}else{
		// 				unset($cart[$id]);
		// 			}
		// 		}
		// 		Session::put('cart', $cart);
		// 		return redirect()->back();
		// 	}
		// }
	}


	public function deleteCart($id)
	{
		$cart = Session::get('cart');
		unset($cart[$id]);
		Session::put('cart', $cart);
		return redirect()->back();
	}

}
