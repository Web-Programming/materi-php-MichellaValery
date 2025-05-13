<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

Route::get(uri; '/', function (): view {
    return view(view: 'welcome');
});

Route::get(uri; '/home', action: function (): view {
    return view('beranda', data : ['name'=>'Michella', 'Email' => 'miselvalery@gmail.com', 'alamat' => 'Manggos84']);
});

Route::get(uri: '/berita/{id}/{judul?}', action: function ($id,$judul = null): view {
    return view(view: 'berita', data: ['id' => $id,'judul' => $judul]); 
}); /*untuk judul = null */

/* Route::get('/berita/{id}/{judul}', function ($id,$judul) {
    return view('berita', ['id' => $id,'judul' => $judul]); : untuk judul input manual */

    // mmebuat route ke halaman prodi index melalui controller ProdiController
    Route::get(uri: '/prodi/index', action: [ProdiController::class,'index']);