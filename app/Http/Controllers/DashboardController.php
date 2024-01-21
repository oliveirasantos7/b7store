<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Advertise;
use App\Models\AdvertiseImage;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class DashboardController extends Controller
{

// public function  myAcount(Request $request){

//     $data['user'] = auth()->user();
//     $data['states'] = State::all();


//     return view('dashboard.my_account', compact('data'));
// }

public function myAccount(Request $request, Guard $auth): View
{
    $user = $auth->user();
    $states = State::all();

    return view('dashboard.my_account', compact('user', 'states'));
}


public function  myAccountAction(UpdateProfileRequest $request){


    

    $data = $request->only(['name','email','state_id']);
    $userId = Auth::user()->id;

       $user = User::find($userId);
       $user->update($data);

       return redirect()
       ->route('my_acount')
       ->with('success', 'Perfil atualizado com sucesso');
}

public function myAds(){
    $user = Auth::user();

//    $advertises = $user->advertise;

// $advertises = Advertise::all();

 $advertises = $user->advertises;

//  $featuredImage = optional($advertises->images->where('featured', 1)->first())->url;

    
    return view('dashboard.my_ads', compact('advertises'));
}

}
