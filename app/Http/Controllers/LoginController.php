<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Customer;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use Session;

class LoginController extends Controller
{
	public function showLogin(){
		$cart = Session::get('cart');
		$total = 0;
        // return dd($cart);
		if (isset($cart)) {
			foreach ($cart as $value){
				$total += $value['quantity']*$value['price_pro'];
			}
		}
		return view('login',compact('cart','total'));
	}
	public function checkLogin(Request $request){

		$rules = [
			'email' =>'required|email',
			'password' => 'required|min:6'
		];
		$messages = [
			'email.required' => 'Email là trường bắt buộc',
			'email.email' => 'Email không đúng định dạng',
			'password.required' => 'Password là trường bắt buộc',
			'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
		];
		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		} else {
			$user_data = array(
				'email' => $request->get('email'),
				'password' => $request->get('password')
			);;

			// 
			// return var_dump($user_data);
			// return dd($user_data['email']);

			if( Auth::attempt($user_data)) {
				// echo 'haha';
				// return var_dump($user_data);
				return redirect()->route('my-account');
			// return var_dump(Auth::attempt($user_data));
				
			} else {
				$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
				return redirect()->back()->withInput()->withErrors($errors);
			}
		}
	}

	public function logout(Request $request) {
		Auth::logout();
		return redirect()->route('login');
	}


}
