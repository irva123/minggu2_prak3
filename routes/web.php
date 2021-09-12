<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', function () {
    return "Selamat datang di halaman home";
});

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', function () {
    return "Manajemen informatika adalah konsentrasi sistem informasi dirancang secara khusus guna menghasilkan tenaga ahli madya bidang sistem informasi, yang memiliki kompetensi bidang manajerial, desain, dan pembuatan basis data, proses bisnis, dan prosedur bisnis dalam bentuk perangkat lunak, yang berkarakter technopreneur, sadar mutu dengan keunggulan kompetitif yang beretika profesi.";
    });
    Route::get('/teknik-informatika', function () {
        return "Teknik Informatika adalah Melaksanakan pendidikan vokasi yang inovatif berdasarkan pada sistem pendidikan terapan dengan memanfaatkan kemajuan teknologi, sehingga mampu menghasilkan lulusan yang memiliki kompetensi di bidang rekayasa perangkat lunak dan siap bersaing di tingkat nasional dan global.";
    });
   });
   
   Route::get('/news/{id}', [NewsController::class, 'news']);

   Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', function () {
    return "Ini halaman untuk menampilkan sarana perkantoran";
    });
    Route::get('/laboratorium', function () {
        return "Ini halaman untuk menampilkan sarana laboratorium";
    });
    Route::get('/kelas', function () {
        return "Ini halaman untuk menampilkan sarana kelas";
    });
    Route::get('/lainnya', function () {
        return "Ini halaman untuk menampilkan sarana lainnya";
    });
   });

   Route::get('about-us', function () {
    return "Selamat datang di halaman About Us";
});

Route::get('/nama/{nama}/pesan/{pesan}', function ($namaku, 
$pesan) {
 return "Namaku " .$namaku. " pesanku adalah ".$pesan;
});
