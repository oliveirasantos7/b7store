<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\State;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
 public function login(){
    return view('auth.login');
 }

 public function register(){
    return view('auth.register');
 }

 public function forgotPassword(){
   return view('auth.forgot-password');
 }

 public function registerAction(Request $request){

   $validated = $request->validate([
      'name' => 'required|min:6|max:255',
            'email'=> 'required|email|unique:users,email',
            'password'=>'required|min:6|max:255|confirmed'
  ]);

   echo 'o codigo chegou';
   
   $userData = $request->only(['name', 'email', 'password']);
   $userData['password'] = Hash::make($userData['password']);
   $user = User::create($userData);

   Auth::loginUsingId($user->id);
   return redirect('state');
   dd($user);
 }

 public function stateSelect(){
   $data['states'] = State::all();
   return view('auth.state', $data);
 }



 public function stateAction(Request $request){


$data = $request->only(['state']);


$stateRegister = State::find($data['state']);

if(!$stateRegister){
  return redirect()->route('login');
}

$user = Auth::user();
$user->state_id = $stateRegister->id;
$user->save();

return redirect()->route('home');

 }

 public function loginAction(Request $request){

  $validated = $request->validate([
    
          'email'=> 'required|email',
          'password'=>'required'
]);

$loginData = $request->only(['email', 'password']);

  if(!Auth::attempt($loginData)){
    $data['message'] = 'usuario ou senha invalidos';
    $data['email'] = $loginData['email'];
    return view('auth.login', $data);
    
    // $user = Auth::user();
  }
  return redirect()->route('home');

   
  }

  public function logout(){
    Auth::logout();
    return redirect()
    ->route('login');
  }




 }

