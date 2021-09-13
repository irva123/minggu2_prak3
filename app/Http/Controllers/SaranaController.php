<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        return "Ini halaman untuk menampilkan sarana perkantoran";
    }

    public function lab(){
        return "Ini halaman untuk menampilkan sarana laboratorium";
    }

    public function kelas(){
        return "Ini halaman untuk menampilkan sarana kelas";  
    }

    public function lain(){
        return "Ini halaman untuk menampilkan sarana lainnya";
    }
}
