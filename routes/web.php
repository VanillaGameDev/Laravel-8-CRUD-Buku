<?php

use App\Http\Controllers\BukuContoller;
use Illuminate\Support\Facades\Route;

Route::get('/buku', [BukuContoller::class, 'index']);
Route::post('/buku/create', [BukuContoller::class, 'create']);
Route::get('/buku/{id}/edit',[BukuContoller::class, 'edit']);
Route::post('/buku/{id}/update',[BukuContoller::class, 'update']);
Route::get('/buku/{id}/delete',[BukuContoller::class, 'delete']);


Route::get('/', function () {
    return view('welcome');
});
