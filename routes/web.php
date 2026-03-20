<?php
use App\Http\Controlers\TestControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/test',[TestControler::class,'Welcome']);