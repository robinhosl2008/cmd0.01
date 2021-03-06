<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        session_start();
        if (isset($_SESSION['logado'])) {
            if ($_SESSION['logado'] == 'sim') {
                return view('home/home');
            } else {
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
