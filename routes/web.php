<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/soluciones', 'soluciones')->name('soluciones');
