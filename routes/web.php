<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PizzasController;
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

// Route::get('/', function () {
//     return view('homepage');
// })->name('homepage');

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/pizzas',[PizzasController::class,'getAllPizzas']);


//promjena

Route::get('/about', function () {
    return view('about');
})->name('about');