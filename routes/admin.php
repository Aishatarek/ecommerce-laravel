<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------

Route::group(['middleware'=>'auth'],function () {
    Route::get('/dashboard', 'Admin\categoriesController@dashboard')->name('dashboard');
});
*/
/*Route::get('/dashboard', 'Admin\categoriesController@dashboard')->name('dashboard')->middleware('auth');*/
/*Route::resource('/comments', 'Admin\CommentController');*/
/*
Route::group(['prefix'=>'categories' , 'namespace'=>'Admin' ] , function () {
Route::get('/all', 'categoriesController@showAll')->name('show-ctegories');
Route::get('/show', 'categoriesController@showCategory')->name('show-category');
Route::get('/delete', 'categoriesController@deleteCategory')->name('delete-category');
Route::get('/edit', 'categoriesController@editCategory')->name('edit-category');
Route::get('/update', 'categoriesController@updateCategory')->name('update-category');
});
*/
Route::get('/', 'HomeController@index')->name('mainhome');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/home/products/show/{id}', 'HomeController@show')->name('showw');
        Route::post('/home/products/search/{name_en?}' , 'HomeController@searchByName')->name('products.searchh');


    });


Route::group(['middleware'=>'checkIfAdmin' , 'namespace'=>'Admin' ] , function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/users/all', 'AdminController@users')->name('users.all');
    Route::get('/comments/all', 'CommentController@comments')->name('comments.all');
    Route::get('/categories/all', 'CategoriesController@categories')->name('categories.all');

    /////////////////////////
    Route::get('/users/create' , 'AdminController@create')->name('users.create');
    Route::post('/users/store' , 'AdminController@store')->name('users.store');
    Route::get('/users/delete/{id}' , 'AdminController@delete')->name('users.delete');
    Route::get('/users/edit/{id}' , 'AdminController@edit')->name('users.edit');
    Route::post('/users/update/{id}' , 'AdminController@update')->name('users.update');
    Route::post('/users/search/{email?}' , 'AdminController@searchByEmail')->name('users.search');

    //////////////////////

    Route::resource('/categories', 'CategoriesController');
///////////////////////////////////
Route::resource('/comments', 'CommentController');
///////////////////////////
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/products/all', 'ProductController@products')->name('products.all');
        Route::get('/products/create' , 'ProductController@create')->name('products.create');
        Route::post('/products/store' , 'ProductController@store')->name('products.store');
        Route::get('/products/delete/{id}' , 'ProductController@delete')->name('products.delete');
        Route::get('/products/edit/{id}' , 'ProductController@edit')->name('products.edit');
        Route::post('/products/update/{id}' , 'ProductController@update')->name('products.update');
        Route::get('/products/show/{id}' , 'ProductController@show')->name('products.show');

        Route::post('/products/search/{name_en?}' , 'ProductController@searchByName')->name('products.search');
        /*Route::get('/', 'AdminController@home')->name('home');*/


    });


});

Auth::routes();

