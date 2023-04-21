<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use Hash;
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
       $reg->Password= $password;
       $reg->Nickname= $nickname;
       $reg->City= $city;
       $reg->save();
       return redirect('login');
    }

    function login(Request $req){
          $req->validate([
            'email'=>'required|email',
            'pass'=>'required|min:4|max:10'
        ]);
         
          $reg = register::where('Password','=',$req->pass)->first();
          if($reg){
            //if(register::where('Password','=',$req->pass)){
     //if(Hash::check($req->password,$reg->pass)){
     // req->session()->put('LoginId',$req->Id);
      return redirect('dashboard');
   }
  
else{
    return back()->with('fail','Invalid Username and password');
}
   }
}   
   
