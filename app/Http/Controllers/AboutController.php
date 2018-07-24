<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\user;

class AboutController extends Controller
{
    public function aboutMahe() {
      // echo "Total user:";
      //echo  User::count();
     return view('about');
    }
}
