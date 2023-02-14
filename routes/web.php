<?php
use App\Http\Controllers\productController;
use App\Models\order;
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
Route::get('productList',[productController::class,'index']);
Route::get('addProduct',[productController::class,'addproduct']);
Route::post('saveProduct',[productController::class,'saveproduct']);
Route::get('editProduct/{id}',[productController::class,'editproduct']);
Route::post('updateProduct/{id}',[productController::class,'updateproduct']);
Route::get('deleteProduct/{id}',[productController::class,'deleteproduct']);

Route::get('productList2',[productController::class,'index']);
Route::get('addProduct2',[productController::class,'addproduct']);
Route::post('saveProduct2',[productController::class,'saveproduct']);
Route::get('editProduct/{id}',[productController::class,'editproduct']);
Route::post('updateProduct/{id}',[productController::class,'updateproduct']);
Route::get('deleteProduct/{id}',[productController::class,'deleteproduct']);