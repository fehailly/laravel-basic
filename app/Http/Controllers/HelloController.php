<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showName($name){
      return '<h1>Hello '.$name.'</h1>';
    }
    function resultProduct($product){
      return '<h1>Your '.$product.' is OK!!</h1>';
    }
    function showUser(){
      return view('create.user')
      ->with('name','Fehai')
      ->with('title','Laravel Basic');
    }
}
