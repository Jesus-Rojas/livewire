<?php

use App\Http\Controllers\Forms\FormsController;
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
    return view('welcome');
});

// livewire 1
// Route::livewire('/register', 'register')->layout('layouts.app');

// livewire 2
Route::view('/register', 'register');

Route::view('/form', 'pages.form');

Route::post('arcticles/create', [FormsController::class, 'createArticle']);
Route::post('file/download', [FormsController::class, 'downloadFile']);