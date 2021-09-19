<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about-us',['tentang' => 'Selamat datang di halaman About Us']);
    }
}
