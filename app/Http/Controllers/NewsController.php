<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news ($id){
        return view('news',['berita' => 'Berikut adalah berita ke '. $id]);
}
}