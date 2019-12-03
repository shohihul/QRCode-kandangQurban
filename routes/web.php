<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('admin')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dahboard', 'DashboardController@index')->name('admin.dashboard');

        //Cattleman
        Route::get('/cattleman/get_by_province', 'CattlemanController@get_by_province')
            ->name('admin.regencie.get_by_province');
        Route::get('/catteleman', 'CattlemanController@index')
            ->name('admin-cattleman.index');
        Route::get('/cattleman/create', 'CattlemanController@create')
            ->name('admin-cattleman.create');
        Route::post('/cattleman/store', 'CattlemanController@store')
            ->name('admin-cattleman.store');
        Route::get('/cattleman/detail/{id}', 'CattlemanController@detail')
            ->name('admin-cattleman.detail');
        Route::get('/cattleman/edit/{id}', 'CattlemanController@edit')
            ->name('admin-cattleman.edit');
        Route::put('/cattleman/update/{id}', 'CattlemanController@update')
            ->name('admin-cattleman.update');
        Route::delete('/cattleman/delete/{id}', 'CattlemanController@delete')
            ->name('admin-cattleman.delete');


        //Livestock
        Route::get('/livestock/get_by_category', 'LivestockController@get_by_category')
            ->name('admin.type.get_by_category');
        Route::get('/livestock', 'LivestockController@index')
            ->name('admin-livestock.index');
        Route::get('/livestock/create', 'LivestockController@create')
            ->name('admin-livestock.create');
        Route::post('/livestock/store', 'LivestockController@store')
            ->name('admin-livestock.store');
        Route::get('/livestock/detail/{id}', 'LivestockController@detail')
            ->name('admin-livestock.detail');
        Route::get('/livestock/edit/{id}', 'LivestockController@edit')
            ->name('admin-livestock.edit');
        Route::put('/livestock/update/{id}', 'LivestockController@update')
            ->name('admin-livestock.update');
        Route::delete('/livestock/delete/{id}', 'LivestockController@delete')
            ->name('admin-livestock.delete');
    });
});
