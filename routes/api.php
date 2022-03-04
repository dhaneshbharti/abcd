<?php
use App\Http\Controllers\GrocceryController;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/product/create',[\App\Http\Controllers\GrocceryController::class,'save']);    
Route::post('/customer/create',[\App\Http\Controllers\GrocceryController::class,'Store']); 
Route::post('/dhannu',[\App\Http\Controllers\GrocceryController::class,'show']); 
Route::post('/dhannu',[\App\Http\Controllers\GrocceryController::class,'brand']);
Route::post('list',[\App\Http\Controllers\GrocceryController::class,'view']);