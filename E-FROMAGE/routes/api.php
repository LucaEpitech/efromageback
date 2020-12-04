<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("produits",[ProductController::class,'list']);
 
Route::post("produit",[ProductController::class,'add']);
 
Route::put("produit",[ProductController::class,'update']);
 
Route::delete("produit",[ProductController::class,'delete']);
 
Route::get("produit/{name}",[ProductController::class,'search']);
 
Route::post("categorie",[CategoryController::class,'add']);
 
 
//auth
Route::post("save",[ProductController::class,'testData']);