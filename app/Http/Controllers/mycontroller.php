<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\register;
use App\Models\food;
use App\Models\User;
use App\Models\cart;
use App\Models\Order;

use Session;
class mycontroller extends Controller
{
    //
    function insert(Request $req){
        $req->validate([
        'user'=>'required',
        'email'=>'required|email|unique:registers',
        'pass'=>'required|min:4|max:10'
        ]);
        $user = $req->get('user');
        $email = $req->get('email');
        $password = $req->get('pass');
       $nickname =  $req->get('nick');
        $city = $req->get('city');
       $reg = new register();
       $reg->Username= $user;
       $reg->Email= $email;
       $reg->Password= Hash::make($password);
       $reg->Nickname= $nickname;
       $reg->City= $city;
       $reg->save();
     
       return redirect('login');
    }

    function login(Request $req){
          $req->validate([
            'email'=>'required',
            'pass'=>'required',
        ]);
        $reg = register::where('Email','=',$req->email)->first();
        if( $reg){
        if(Hash::check($req->pass,$reg->Password)){
          $req->session()->put('loginId',$reg->id);
          $req->session()->put('user_id',$reg->Id);
          $req->session()->put('user',$reg->Username);
          
             return redirect('dashboard');
        }
        else{
          return back()->with('fail','Invalid Email');
        }
      }    

          else{
  return back()->with('fail','Invalid Email');
}}

    
 public function dashboard(){
   return view('dashboard');
 }

   function view(Request $req)
   {
    $search =$req['search'] ?? "";
    if($search != ""){
      $foods = food::where('name','LIKE',"%$search%")->get();
    }
    else{
    $foods = food::all();
    }
    // echo "<pre>";
    // print_r($foods);
    // echo "</pre>";
    $data = compact('foods','search');
    return view('cart')->with($data);
   }

  public function addtoCart(Request $req ) {
    if($req->session()->has('user')) {
      $food_check = food::where('Id', $req->get('item_id'))->exists();
        if($food_check){
          if(cart::where('food_id',$req->get("item_id"))->where('user_id',$req->session()->get('user_id'))->exists()) {
            return redirect("cart");
          }
          else {
            $cart = new cart;
            $cart->food_id=$req->get('item_id');
            $cart->user_id=$req->session()->get('user_id');
            $cart->quantity=$req->get('quantity');
            $cart->save();
            return redirect("add-to-cart");
          }
        }
    }
    else {
      return redirect("login");
    }
  }

  static function cartList() {
    $userId= Session::get('user_id');
    $data =  DB::table('cart')
    ->join('food','cart.food_id','food.id')
    ->select('food.*','cart.id as cart_id','cart.quantity')
    ->where('cart.user_id',$userId)
    ->get();
    return view('add-to-cart',['food'=>$data]);
  }

  public function show($id)
  {
      $item = food::findOrFail($id);
      return view('add-to-cart', compact('item'));
  }
  

  function removeCart($Id){
     cart::destroy($Id);
    return redirect("add-to-cart");
   }
   public function cashOrder(){
    $userId= Session::get('user_id');
    $data = cart::where('user_id','=',$userId)->get();
    foreach($data as $data)
    {
      $order= new Order;
      $order->food_id=$data->food_id;
      $order->user_id=$data->user_id;
     $order->quantity=$data->quantity;
      $order->save();
      
    }
   return redirect('add-to-cart')->with('message','Successfully ordered');
  } 
  
   }
  
   


