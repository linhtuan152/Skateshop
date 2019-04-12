<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
// use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use App\user;
use App\Order;
use App\Order_detail;
use Validator;
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
        $product = Product::all();
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
        return view('home',compact('category','product','deck','truck','wheels','griptape','bearings','cart','total'));
    }
    public function showContact(){
     $product = Product::all();
     $cart = Session::get('cart');
     $total = 0;
        // return dd($cart);
     if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    return view('contact-us',compact('cart','total','product'));
}


public function showAcc()
{
    $product = Product::all();
    $user = Auth::user();
    $cart = Session::get('cart');
    $total = 0;
        // return dd($cart);
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    $order = DB::table('order')->where('id_cus',$user['id_cus'])->get();
    // dd($order);
    
    // return dd($order_detail);
    return view('my-account',compact('user','cart','total','product','order'));

}

public function addWish($id){
    $user = Auth::user();
    $product = DB::select('select * from product where id_pro='.$id);
        // return dd($product[0]);
    $wish = Session::get('wish');
        // return dd($cart);
        // return dd(session()->has($id));
        // return dd(isset($cart));
    if(isset($wish)){
        if (array_key_exists($id, $wish)){
            $wish[$id] = array(
                "id_pro" => $cart[$id]["id_pro"],
                "name_pro" => $cart[$id]["name_pro"],
                "id_cat" => $cart[$id]['id_cat'],
                "price_pro" => $cart[$id]['price_pro'],
                "sale_price_pro" => $cart[$id]['sale_price_pro'],
                "img" => $cart[$id]['img'],
                "description" => $cart[$id]['description'],
                "status_pro" => $cart[$id]['$status_pro']
            );
        }
        else{
            $wish[$id] = array(
                "id_pro" => $product[0]->id_pro,
                "name_pro" => $product[0]->name_pro,
                "id_cat" => $product[0]->id_cat,
                "price_pro" => $product[0]->price_pro,
                "sale_price_pro" => $product[0]->sale_price_pro,
                "img" => $product[0]->img,
                "description" => $product[0]->description,
                "status_pro" => $product[0]->status_pro
            );
        }
    }
    else{
        $wish[$id] = array(
            "id_pro" => $product[0]->id_pro,
            "name_pro" => $product[0]->name_pro,
            "id_cat" => $product[0]->id_cat,
            "price_pro" => $product[0]->price_pro,
            "sale_price_pro" => $product[0]->sale_price_pro,
            "img" => $product[0]->img,
            "description" => $product[0]->description,
            "status_pro" => $product[0]->status_pro
        );
        Session::put('wish', $wish);
    }

    Session::put('wish', $wish);
    Session::flash('success','Thêm sản phẩm thành công !');
        // return dd(Session::get('cart'));
    return redirect()->back();
}
public function deleteWish($id){
    $wish = Session::get('wish');
    unset($wish[$id]);
    Session::put('wish', $wish);
    return redirect()->back();
}
public function showWishList(){
    $product = Product::all();
    $cart = Session::get('cart');
    $total = 0;
        // return dd($cart);
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    $wish = Session::get('wish');
    return view('wishlist',compact('wish','cart','total','product'));
}

public function showProduct($id){
    $product = DB::table('product')->where('id_pro',$id)->get();
    $cart = Session::get('cart');
    $total = 0;
        // foreach($product as $key=>$value){return dd($value->img);
// }
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    return view('product-detail',compact('cart','total','product'));
}
public function showCheckout(){
    $user = Auth::user();
    $product = Product::all();
    $cart = Session::get('cart');
    $total = 0;
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    return view('checkout',compact('cart','total','product','user'));
}

public function checkout(Request $request){
        // return dd($request->all());
    $user = Auth::user();
    $data = $request->all();
    unset(($data)['_token']);
    $cart = Session::get('cart');
    // return dd($cart);
        // return dd($data);

        // return dd($user['id_cus']);

    $total = 0;
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    $order = new Order;
        // return dd($order);
    $order->id_cus = $user['id_cus'];
    $order->total_price = $total;
    $order->payment = $request['payment'];
    $order->delivery = $request['delivery'];
        // return dd($order);
    $order->save();
    $id = DB::select("SELECT `id_ord` FROM `order` ORDER BY `order`.`created_at` DESC LIMIT 1");
        // return dd($id[0]->id_ord);
    $finalArray = array();
        // return dd($order_detail->id_pro);
    foreach ($cart as $key => $value) {
        array_push($finalArray, array(
            'id_ord' => $id[0]->id_ord,
            'id_pro' => $key,
            'quantity' => $value['quantity'],
            'price_pro' => $value['price_pro'],
            'sale_price_pro' => $value['sale_price_pro']));
    }
    // return dd($finalArray);
    Order_detail::insert($finalArray);
    unset($order);
    unset($finalArray);
    session()->forget('cart');
    // return dd($cart);


    return redirect()->route('success');

}

public function showRegister(){
    $product = Product::all();
    $cart = Session::get('cart');
    $total = 0;
        // return dd($cart);
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    return view('register',compact('cart','total','product'));
}

public function addUser(Request $request){
    $rules = [
        'email' =>'required|email',
        'password' => 'required|min:6',
        'phone' => 'required',
        'fullname' => 'required'

    ];
    $messages = [
        'email.required' => 'Email là trường bắt buộc',
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Password là trường bắt buộc',
        'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        'phone.required' => 'Phone là trường bắt buộc',
        'fullname.required' => 'Fullname là trường bắt buộc',
    ];
    $validator = Validator::make($request->all(), $rules, $messages);
        // return dd($validator);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    } else {
        $user_data = array(
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'phone' => $request->get('phone'),
            'fullname' => $request->get('fullname'),
            'address' => $request->get('address'),
        );;

            // 
            // return var_dump($user_data);
            // return dd($user_data['email']);
        $user = DB::select("select * from customer where email ='".$request->get('email')."' or phone = '".$request->get('phone')."'");
            // return dd($user);
        if($user == NULL) {
                // echo 'haha';
                // return var_dump($user_data);

            User::create($user_data);
            return redirect()->route('login');
            // return var_dump(Auth::attempt($user_data));

        } else {
            $errors = new MessageBag(['errorlogin' => 'Email hoặc số điên thoại đã đăng ký']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }
}

public function showSuccess(){
    $product = Product::all();
    $cart = Session::get('cart');
    $total = 0;
        // return dd($cart);
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    return view('success',compact('cart','total','product'));
}

public function showShop(){
    $category = Category::all();
    $brand = DB::table('product')->distinct()->pluck('description');
    $product = Product::inRandomOrder()->paginate(6);
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
    // dd($product->links());
        // return echo "<pre>";
        // return dd($url);
    return view('shop',compact('category','brand','product','url','urlS','cart','total'));
}
public function showDeck(){
    $category = Category::all();
    $product = Product::all();
    $deck = DB::table('product')->where('id_cat',1)->paginate(3);
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
    // dd($deck->links('vendor.pagination.default'));
      
    return view('shop_content.deck',compact('category','deck','brand','url','urlS','cart','total','product'));
}
public function showTruck(){
    $category = Category::all();
    $product = Product::all();
    $truck = DB::table('product')->where('id_cat',2)->paginate(3);
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
    return view('shop_content.truck',compact('category','truck','brand','url','urlS','cart','total','product'));
} public function showWheels(){
    $category = Category::all();
    $product = Product::all();
    $wheels = DB::table('product')->where('id_cat',3)->paginate(3);
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
    return view('shop_content.wheels',compact('category','wheels','brand','url','urlS','cart','total','product'));
} public function showBearings(){
    $category = Category::all();
    $product = Product::all();
    $bearings = DB::table('product')->where('id_cat',4)->paginate(3);
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
    return view('shop_content.bearings',compact('category','bearings','brand','url','urlS','cart','total','product'));
} public function showGriptape(){
    $category = Category::all();
    $product = Product::all();
    $griptape = DB::table('product')->where('id_cat',5)->paginate(3);
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
    return view('shop_content.griptape',compact('category','griptape','brand','url','urlS','cart','total','product'));
}
public function showDetail(Request $request){
    $product = Product::all();
    $user = Auth::user();
    $cart = Session::get('cart');
    $total = 0;
        // return dd($cart);
    if (isset($cart)) {
        foreach ($cart as $value){
            $total += $value['quantity']*$value['price_pro'];
        }
    }
    $order = DB::table('order')->where('id_cus',$user['id_cus'])->get();
    
    // return dd($order_detail);
  
    $order_detail = DB::select("SELECT ord_detail.quantity,ord_detail.price_pro,product.name_pro,product.img FROM `ord_detail` INNER JOIN product WHERE product.id_pro = ord_detail.id_pro AND ord_detail.id_ord = ".$request->get('id'));
    // dd($order_detail);

   return view('my-account',compact('user','cart','total','product','order','order_detail'));

}
public function showPrice1(){
    $category = Category::all();
    $product = Product::all();
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
    $price = DB::table('product')->where('price_pro','>',0)->where('price_pro','<',1000000)->paginate(6);
    return view('shop_content.price',compact('category','price','brand','url','urlS','cart','total','product'));
}
public function showPrice2(){
    $category = Category::all();
    $product = Product::all();
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
    $price = DB::table('product')->where('price_pro','>',1000000)->where('price_pro','<',2000000)->paginate(6);
    return view('shop_content.price',compact('category','price','brand','url','urlS','cart','total','product'));
}
public function showPrice3(){
    $category = Category::all();
    $product = Product::all();
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
    $price = DB::table('product')->where('price_pro','>',2000000)->where('price_pro','<',3000000)->paginate(6);
    return view('shop_content.price',compact('category','price','brand','url','urlS','cart','total','product'));
}
public function showSupreme(){
    $category = Category::all();
    $product = Product::all();
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
    $item = DB::table('product')->where('description','SUPREME')->paginate(6);
    return view('shop_content.brand',compact('category','item','brand','url','urlS','cart','total','product'));
}
public function showBlank(){
    $category = Category::all();
    $product = Product::all();
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
    $item = DB::table('product')->where('description','BLANK')->paginate(6);
    return view('shop_content.brand',compact('category','item','brand','url','urlS','cart','total','product'));
}
public function showBD(){
    $category = Category::all();
    $product = Product::all();
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
    $item = DB::table('product')->where('description','BD SKATE')->paginate(6);
    return view('shop_content.brand',compact('category','item','brand','url','urlS','cart','total','product'));
}
public function showInde(){
    $category = Category::all();
    $product = Product::all();
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
    $item = DB::table('product')->where('description','INDEPENDENT')->paginate(6);
    return view('shop_content.brand',compact('category','item','brand','url','urlS','cart','total','product'));
}
public function showBones(){
    $category = Category::all();
    $product = Product::all();
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
    $item = DB::table('product')->where('description','BONES')->paginate(6);
    return view('shop_content.brand',compact('category','item','brand','url','urlS','cart','total','product'));
}
public function showAndele(){
    $category = Category::all();
    $product = Product::all();
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
    $item = DB::table('product')->where('description','ANDALE')->paginate(6);
    return view('shop_content.brand',compact('category','item','brand','url','urlS','cart','total','product'));
}



}
