<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jenis-buku', App\Livewire\JenisBuku\Index::class)->name('jenis
buku.index'); 
Route::get('/jenis-buku/create', App\Livewire\JenisBuku\Create::class)
>name('jenis-buku.create'); 
Route::get('/jenis-buku/edit, App\Livewire\JenisBuku\Edit::class)
>name('jenis-buku.edit);
