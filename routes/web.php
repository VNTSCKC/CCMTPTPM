<?php
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DemoController::class ,'showWelcome']);
Route::get('/{ten}',[DemoController::class,'sayHello']);
Route::get('/tinhtong/{a}/{b}',[DemoController::class,'tinhtong']);
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