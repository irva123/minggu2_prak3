<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($namaku, $pesan){
        return "Nama saya " .$namaku. " pesan dari saya adalah ".$pesan;
    }
}
