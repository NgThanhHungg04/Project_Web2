<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/login-admin', action:'App\Http\Controllers\AuthController@login_index');
// Route::post('/login-admin', action:'App\Http\Controllers\AuthController@login_post');

Route::get('/admin', function () {
    $user = Session::get('user_admin');
    if(!$user){
        return redirect('/login-admin');
    }
    else{
        return view('admin');
    }
    return view('admin');
});


Route::prefix('products')->group(function () {
    Route::get('/index', [
    	'as'=>'products.index',
    	'uses'=>'App\Http\Controllers\ProductController@index'
    ]);
    Route::get('/create', [
    	'as'=>'products.create',
    	'uses'=>'App\Http\Controllers\ProductController@create'
    ]);
    Route::post('/save', [
    	'as'=>'products.save',
    	'uses'=>'App\Http\Controllers\ProductController@save'
    ]);
    Route::get('/edit/{id}', [
    	'as'=>'products.edit',
    	'uses'=>'App\Http\Controllers\ProductController@edit'
    ]);
    Route::post('/saveedit/{id}', [
    	'as'=>'products.saveedit',
    	'uses'=>'App\Http\Controllers\ProductController@saveedit'
    ]);
    Route::get('/delete/{id}', [
    	'as'=>'products.delete',
    	'uses'=>'App\Http\Controllers\ProductController@delete'
    ]);
});
