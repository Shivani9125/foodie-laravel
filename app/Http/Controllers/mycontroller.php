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

   public function addtoCart(Request $req )
   {
   // $user_id=Auth::user()->id;
    //if(Auth::Id())
    // {
     if($req->session()->has('user'))
     {
    
   
  
        $cart = new cart;
        
     // $data = session()->get('user.id');
     //  $data = register::find($Id);
      //  $data->Session::getId('user')['id'];
        
        $cart->food_id=$req->get('item_id');
       // $sessionId= session()->getId();

         $cart->user_id=$req->session()->get('user_id');
         $cart->quantity=$req->get('quantity');
        //$cart->user_id=$req->user->Id;
        $cart->save();
        return redirect("add-to-cart");
      }
    else
    {
       return redirect("login");
    }
   }
   static function cartList()
   {
    $userId= Session::get('user_id');
    $data =  DB::table('cart')
    ->join('food','cart.food_id','food.id')
    ->select('food.*','cart.id as cart_id','cart.quantity')
    ->where('cart.user_id',$userId)
    ->get();
   
  return view('add-to-cart',['food'=>$data]);
   }

   function removeCart($Id){
     cart::destroy($Id);
    return redirect("add-to-cart");
   }
}