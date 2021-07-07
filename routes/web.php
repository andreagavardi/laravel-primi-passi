<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Studenti classe 35',
        'subtitle' => 'Imparando Laravel',
        'students' => [
            'Anna',
            'Giacomo',
            'Andrei',
            'Andrea',
            'Emanuele',
            'Beatrice',
            'Roberto',
            'Laura'
        ],
    ];

    return view('home', $data);
});
