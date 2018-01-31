<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function getusers(){
      $korisnici=\App\User::all();
      return view('test', ['korisnici' => $korisnici]);
    }
}
