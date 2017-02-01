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
Route::get('/Contact', function () {
    return view('welcome');
});

// View::share('c', App\Category::latest()->get()); // c stands for category
// View::share('user', App\User::all());
View::share('openschedule', App\Openschedule::all());
View::share('user', App\User::all());

// Route::get('/', ['as' => '/', 'uses' => 'OpenscheduleController@index']);
Route::patch('/openschedule/{id}', 'OpenscheduleController@publish');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/openschedule/bin', 'OpenscheduleController@bin');
Route::get('/openschedule/bin/{id}/restore', 'OpenscheduleController@restore');
Route::delete('/openschedule/bin/{id}/destroySchedule', 'OpenscheduleController@destroySchedule');

Route::get('/home', 'HomeController@index');
Route::get('/openschedule', 'OpenscheduleController@index');
Route::get('/openschedule/create', 'OpenscheduleController@create');
Route::post('/openschedule/store', 'OpenscheduleController@store');
Route::get('/openschedule/{id}', 'OpenscheduleController@show');
Route::get('/openschedule/{id}/edit', 'OpenscheduleController@edit');
Route::patch('/openschedule/{id}', 'OpenscheduleController@update');
Route::delete('/openschedule/{id}', 'OpenscheduleController@destroy');




Route::get('admin', 'AdminController@index');
Route::get('medic', 'MedicController@index');
Route::get('provider', 'ProviderController@index');

Route::resource('availablemedics', 'AvailablemedicController');



