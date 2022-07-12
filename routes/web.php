<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
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
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer/create',[CustomerController::class, 'index']);
Route::get('/customer/',[CustomerController::class, 'redirect']);
Route::get('/customer/view',[CustomerController::class, 'view']);
Route::get('/customer/delete',[CustomerController::class, 'delete_redirect']);
Route::get('/customer/delete/{id}',[CustomerController::class, 'delete']);
Route::get('/customer/edit',[CustomerController::class, 'edit_redirect']);
Route::post('/customer/edit/{id}',[CustomerController::class, 'edit']);
Route::get('/customer/update/{id}',[CustomerController::class, 'update']);
Route::post('/customer',[CustomerController::class, 'store']);
