<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;

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


Route::get('/', [BudgetController::class, 'login']);
Route::get('/add', [BudgetController::class, 'create']);

//Route::post('budgets', 'BudgetController@store')->name('budgets.store');

Route::resource('budgets', 'BudgetController');

Route::resource('userlogins', 'BudgetController');
//Route::get('/layout', 'BudgetController@index');

//Route::get('saved', 'BudgetController@saved');

