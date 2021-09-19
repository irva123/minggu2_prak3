<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSController extends Controller
{
    public function MI(){
        return view('manajemen-informatika',['MI' => 'Manajemen informatika adalah konsentrasi sistem informasi dirancang secara khusus guna menghasilkan tenaga ahli madya bidang sistem informasi, yang memiliki kompetensi bidang manajerial, desain, dan pembuatan basis data, proses bisnis, dan prosedur bisnis dalam bentuk perangkat lunak, yang berkarakter technopreneur, sadar mutu dengan keunggulan kompetitif yang beretika profesi.']);
    }

    public function TI(){
        return view('teknik-informatika',['TI' => 'Teknik Informatika adalah Melaksanakan pendidikan vokasi yang inovatif berdasarkan pada sistem pendidikan terapan dengan memanfaatkan kemajuan teknologi, sehingga mampu menghasilkan lulusan yang memiliki kompetensi di bidang rekayasa perangkat lunak dan siap bersaing di tingkat nasional dan global.']);
    }
}
