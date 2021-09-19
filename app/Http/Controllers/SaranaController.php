<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return view('perkantoran', ['kantor' => 'Ini halaman untuk menampilkan sarana perkantoran']);
    }

    public function lab(){
        return view('laboratorium', ['lab' => 'Ini halaman untuk menampilkan sarana laboratorium']);
    }

    public function kelas(){
        return view('kelas', ['kelas' => 'Ini halaman untuk menampilkan sarana kelas']);  
    }

    public function lain(){
        return view('lainnya', ['lain' => 'Ini halaman untuk menampilkan sarana lainnya']);
    }
}
