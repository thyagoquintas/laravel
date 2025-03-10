<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home($nome){
        return view('home', ['nome' => $nome]);
    }
}
