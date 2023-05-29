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
use App\Models\Direct_order;
use Stripe;
use Session;
use PDF;
class mycontroller extends Controller
{
    //
    function insert(Request $req)
    {
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
        if( $reg)
        {
          if(Hash::check($req->pass,$reg->Password))
          {
            $req->session()->put('loginId',$reg->id);
            $req->session()->put('user_id',$reg->Id);
            $req->session()->put('user',$reg->Username);
            return redirect('dashboard');
          }
          else{
          return back()->with('fail','Invalid Email');
        }
      }
      else
      {
        return back()->with('fail','Invalid Email');
      }
    }
    
    public function dashboard()
    {
      return view('dashboard');
    }
    
    function view(Request $req)
    {
      $search =$req['search'] ?? "";
      if($search != "")
      {
        $foods = food::where('name','LIKE',"%$search%")->get();
      }
      else
      {
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
    if($req->session()->has('user'))
    {
      $food_check = food::where('Id', $req->get('item_id'))->exists();
        if($food_check)
        {
          if(cart::where('food_id',$req->get("item_id"))->where('user_id',$req->session()->get('user_id'))->exists())
          {
            return redirect("cart");
          }
          else
          {
            $cart = new cart;
            $cart->food_id=$req->get('item_id');
            $cart->user_id=$req->session()->get('user_id');
            $cart->quantity=$req->get('quantity');
            $cart->save();
            return redirect("add-to-cart");
          }
        }
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

  function removeCart($Id)
  {
    cart::destroy($Id);
    return redirect("add-to-cart");
  }

   public function cash_order()
   {
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
  
  public function addtoOrder(Request $req)
  {
    if($req->session()->has('user'))
    {
      $cart = new Direct_order;
      $cart->food_id=$req->get('item_id');
      $cart->user_id=$req->session()->get('user_id');
      $cart->quantity=$req->get('quantity');          
      $cart->save();
      return redirect('add-orders');

      //return redirect('add-orders')->with('message','Successfully ordered');
    }
    else
    {
      return redirect("login");
    }
  }
 static function orderList() {
 //$direct_order = Direct_order::all();
 $userId= Session::get('user_id');
    $data =  DB::table('direct_orders')
    ->join('food','direct_orders.food_id','food.id')
    ->select('food.*','direct_orders.id as direct_orders_id','direct_orders.quantity')
    ->where('direct_orders.user_id',$userId)
    ->get();
    return view('add-orders',['food'=>$data]);
  }
  function removeOrder($Id){
    Direct_order::destroy($Id);
   return redirect("add-orders");
  }
// echo "<pre>";
// print_r($direct_order);
// echo "</pre>";

public function cash_on_delivery(){
  $userId= Session::get('user_id');
  $data = Direct_order::where('user_id','=',$userId)->get();
  foreach($data as $data)
  {
    $order= new Order;
    $order->food_id=$data->food_id;
    $order->user_id=$data->user_id;
   $order->quantity=$data->quantity;
    $order->save();

  }
  return redirect('add-orders')->with('message','Successfully ordered');
  
}

public function order()
{
  $userId= Session::get('user');
  $order = order::all();
  return view("order",compact('order'));
}

public function print_pdf($id)
{
  $order=order::find($id);
  $pdf=PDF::loadView('order.pdf',compact('order'));
  return $pdf->download('order_details.pdf');
}
public function diet(Request $req)
{
  $days =  $req->get('days');
  if($days=="daily")
  {
    return redirect('DailyDiet');
  }
  else if($days=="weekdays")
  {
    return redirect('WeekDays');
  }
  else
  {
    return redirect('WeekEnds');
  }
}

public function DailyDiet()
{
  return view("DailyDiet");
}
public function WeekDays()
{
  return view("WeekDays");
}
public function WeekEnds()
{ 
  return view("WeekEnds");
}
public function stripe($totalprice)
{
  return view('stripe',compact('totalprice'));
}

public function stripePost(Request $req)
{
  Stripe\Stripe::setApikey(env('STRIPE_SECRET'));
  Stripe\Charge::create([
    "amount"=>100*100,
    "currency"=> "usd",
    "source"=> $req->stripeToken,
    "description"=>"This payment is tested purpose"
  ]);

  Session::flash('success','Payment succesful!');
  return back();
}
}




