<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\JenisBuku\Index;
use App\Livewire\JenisBuku\Create;
use App\Livewire\JenisBuku\Edit;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jenis-buku', Index::class)->name('jenis-buku.index'); 
Route::get('/jenis-buku/create', Create::class)->name('jenis-buku.create'); 
// Tambahkan {id} untuk mengirimkan id buku yang akan di-edit
Route::get('/jenis-buku/{id}/edit', Edit::class)->name('jenis-buku.edit');