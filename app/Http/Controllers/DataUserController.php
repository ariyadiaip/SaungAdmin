<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUserController extends Controller
{
  public function datauser(){
    return view ('user');
  }
}
