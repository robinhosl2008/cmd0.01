<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        session_start();
        if(!isset($_SESSION['id'])){
            return view('login/login');
        }else{
            return view('home/home');
        }
    }
}
