<?php

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
/*Route::prefix('prefix' )->group(function () {
    
});
Route::get('categories/all', 'Admin\categoriesController@showAll')->name('show-ctegories');
Route::get('categories/show', 'Admin\categoriesController@showCategory')->name('show-category');
Route::get('categories/delete', 'Admin\categoriesController@deleteCategory')->name('delete-category');
Route::get('categories/edit', 'Admin\categoriesController@editCategory')->name('edit-category');
Route::get('categories/update', 'Admin\categoriesController@updateCategory')->name('update-category');

*/
Route::get('/welcome', 'HomeController@welcome')->name( 'welcome');


/*Route::get('/welcome', function () {
    return view('frontend.welcome');
})->name( 'welcome');*/
Auth::routes();
/*Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


    });
    

/*Route::get('users/{user_id}', function ($user_id) {
    return 'your id is:' .$user_id;
});*/


/*Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');*/