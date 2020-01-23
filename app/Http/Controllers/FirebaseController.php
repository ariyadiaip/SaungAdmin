<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    public function postData(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://saranalaporbandung.firebaseio.com/')
            ->create();
        $database = $firebase->getDatabase();
        $newPost = $database->getReference('admins')
                        ->push([
                            'namaAdmin' => 'Firework Admin',
                            'username' => 'admin@firework.com',
                            'password' => 'firework123'
                        ]);
        //$newPost->getKey();
        //$newPost->getUri();
        //$newPost->getChild('namaAdmin')->set('Changed Name');
        //$newPost->getValue();
        //$newPost->remove();
        echo"<pre>";
        print_r($newPost->getvalue());
    }

    public function getData() {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://saranalaporbandung.firebaseio.com/')
        ->create();
 
        $database   =   $firebase->getDatabase();
        $usersInfo  =   $database->getReference('admins')->getvalue();      
        return response()->json($usersInfo);
    }

}
