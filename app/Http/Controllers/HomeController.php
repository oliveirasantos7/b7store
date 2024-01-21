<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public $states;
    //  public $categories;

    //  public function __construct()
    //  {
    //      //
    //      $this->states = [
    //          ['value' => 'ES', 'name' => 'ESPIRITO SANTO'],
    //          ['value' => 'SP', 'name' => 'SAO PAULO'],
    //          ['value' => 'MG', 'name' => 'MINAS GERAIS'],
    //          ['value' => 'RJ', 'name' => 'RIO DE JANEIRO'],
 
    //      ];
 
    //      $this->categories = [
    //          ['value' => 'Brinquedos', 'name' => 'Brinquedos'],
    //          ['value' => 'Veiculos', 'name' => 'Veiculos'],
    //          ['value' => 'informatica', 'name' => 'Informatica'],
 
    //      ];
 
    //  }


    public function index(Request $request){
        // $states = [
        //     ['value' => 'ES', 'name' => 'ESPIRITO SANTO'],
        //     ['value' => 'SP', 'name' => 'SAO PAULO'],
        //     ['value' => 'MG', 'name' => 'MINAS GERAIS'],
        //     ['value' => 'RJ', 'name' => 'RIO DE JANEIRO'],

        // ];
        // $categories = [
        //     ['value' => 'Brinquedos', 'name' => 'Brinquedos'],
        //     ['value' => 'Veiculos', 'name' => 'Veiculos'],
        //     ['value' => 'informatica', 'name' => 'Informatica'],

        // ];

        // return view('home',compact('states'), compact('categories'));
        return view('home');
    }
}
