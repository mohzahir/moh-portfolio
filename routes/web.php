<?php
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

Route::get('/hr-tools/cv-redactor', function () {
    return view('tools.redactor');
})->name('tools.redactor');