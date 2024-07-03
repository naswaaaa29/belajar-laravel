<?php

use Illuminate\Support\Facades\Route;

Route::get(uri: '/home', action: fn () => view(view: 'home'));
Route::get(uri: '/about', action: fn () => view(view: 'about'));
Route::get(uri: '/contact', action: fn () => view(view: 'contact'));
Route::get(uri: '/gallery', action: fn () => view(view: 'gallery'));

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');    
// });

Route::get(uri:'users', action: function(){
    $users = [
        ['id' => 1, 'name' => 'Zhafirah Naswa', 'email' => 'zhafirah@gmail.com'],
        ['id' => 2, 'name' => 'Keyzha Idelia', 'email' => 'keyzha@gmail.com'],
    ];

    return view(view: 'users.index', data: compact(var_name: 'users'));
    
});
