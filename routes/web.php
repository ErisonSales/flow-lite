<?php

use App\Http\Livewire\Cadastro\Pessoafisica\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix("cadastro")->group(function () {
    Route::get("pessoas", Index::class)->name('pessoa.index');
});
