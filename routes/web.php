<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        'title' => 'contact',
        'nama' => 'Asyifa Dzaky',
        'nim' => '23/515724/SV/22606',
    ]);
});
Route::get('/', function () {
    return view('home',[
        'title' => 'homepage',
    ]);
});

