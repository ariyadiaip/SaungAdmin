<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatLaporanController extends Controller
{
  public function riwayat(){
    return view ('riwayat');
  }
}
