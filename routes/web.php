<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
  
//  Route::get('/', function () {
//     return view('login');
//  });
Route::get('/', [UserController::class, 'login']);
Route::post('/auth', [UserController::class, 'auth']);
Route::get('/logout', [UserController::class, 'Logout']);

Route::middleware('Login')->group(function() {
Route::get('/produk', [ProdukController::class, 'show']);
Route::post('/search', [ProdukController::class, 'search']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/create', [ProdukController::class, 'add']); 
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/edit/{id}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'delete']);
Route::get('/home', [ProdukController::class, 'index']);

Route::get('/index', [ProdukController::class, 'show']);
Route::get('dasboard', [ProdukController::class, 'showtmp']);
});

