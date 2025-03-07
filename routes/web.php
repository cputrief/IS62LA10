<?php
// use = sama dengan include
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// halaman domain
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });
// // untuh halaman yang tidak ada pakai fallback
// Route::fallback( function () {
//     return view('notfound');
// });
// // nama itu sama dengan id untuk di panggi dari url nya
// Route::get('mahasiswa/{nama}', function ($nama) {
//     echo "ini halaman mahasiswa dengan nama $nama";
// });

// Route::get('mahasiswa', function () {
//     $kelas = "IS62";
//     $data = ["khalifak","Herdio","Cutputri","Sri","iwan","wawa"];
//     // return view('mahasiswa.index') ->with('mhs',$data) ->with('kls',$kelas);
//     // metode compact
//     return view('mahasiswa.index',compact('kelas','data'));
// });

Route::get('/mahasiswa', function (){
    $nama = "cut putri efrina";
    $nilai = 80;

    $nilai2 = [85,30,50,70,35,100];

    return view ('mahasiswa', compact('nama','nilai','nilai2'));
});

