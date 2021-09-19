<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($namaku, $pesan){
        return view('comment', ['nama' => 'Nama saya '.$namaku],['pesan'=>'pesan dari saya adalah '.$pesan]);
    }
}
