<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-all-users', 'API\UsersController@index');
Route::get('/get-all-users/{id}', 'API\UsersController@show');

Route::get('/get-all-products', 'API\ProductsController@index');
Route::get('/get-all-categories', 'API\CategoriesController@index');
Route::post('/store-category', 'API\CategoriesController@store');
Route::post('/delete-category', 'API\CategoriesController@destroy');

// Route::get('/get-all-users', function () {
//     $users=\App\User::all();
//     $arr=[
//         'data' => $users ,
//         'msg'=>'return all users Successfully',
//         'status' => 200

//     ];
//     return response($arr);
// });
// Route::get('/get-all-categories', function () {
//     $categories=\App\Category::all();
//     $arr=[
//         'data' => $categories ,
//         'msg'=>'return all categories Successfully',
//         'status' => 200

//     ];
//     return response($arr);
// });