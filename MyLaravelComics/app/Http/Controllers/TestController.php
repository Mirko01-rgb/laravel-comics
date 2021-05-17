<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function home(){

    return view('pages.home');
  }

  public function home2(){

    return view('pages.home2');
  }
}
