<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class DataUserController extends Controller
{
  public function index()
    {
    	$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
      $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://saranalaporbandung.firebaseio.com/')
        ->create();
 
      $database   =   $firebase->getDatabase();
      $usersInfo  =   $database->getReference('users/laporan')->getvalue();
      //return response()->json($usersInfo);
		  return view('Pages.DataUser', compact($usersInfo));
    }
}
