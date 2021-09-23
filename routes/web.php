<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cvController;
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
})->name("Welcome");

Route::get('/CV-Builder',[cvController::class,'index'])->name("CV_Builder");
Route::post('/CV-Builder',[cvController::class,'store'])->name("cv_builder_store");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
