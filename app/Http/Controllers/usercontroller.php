<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;


class usercontroller extends Controller
{
    public function getusers(){
      // dohvaćanje preko modela
      $korisnici=User::all();
      return view('test', ['korisnici' => $korisnici]);
    }
    public function studenti(){
      // način ispisivanja apsolutnom putanjom
      //$stud=\Illuminate\Support\Facades\DB::select('SELECT * FROM stud LIMIT 10');
      
      // način ispisivanja sa includanim namespaceom 
      $stud=DB::select('SELECT * FROM stud WHERE stud.mbrStud BETWEEN ? AND ? LIMIT ?',[1136,1156,25]);
      return view('teststudenti',['studenti'=>$stud]);
    }
}
