<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use App\Models\AdvertiseImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Cast\String_;

class AdController extends Controller
{

  public function show(String $slug){
    $ad = Advertise::where('slug',$slug)->first();

    if(!$ad){
      return redirect()->route('home');
    }

    $ad->views++;
    $ad->save();
    return view('single-ad', compact('ad'));
  }

      public function delete(String $id){
        $ad = Advertise::where('id', $id)
        ->where('user_id', Auth::user()->id)
        ->first();
        if(!$ad){
            return redirect()->route('home');
        }

        $ad->delete();
        return redirect()->back()->with('success', 'anuncio deletag 
        7do com sucesso');

        
      }
}
