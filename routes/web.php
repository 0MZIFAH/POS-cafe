<?php

use App\Http\Controllers\Admin\TransactionListController;
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

Route::get('', function () {
    return redirect()->route('auth.index');
});
Route::post('cashier/status', 'TransactionController@setStatus')->middleware('can:kasir')->name('cashier.status');
Route::resource('cashier', 'TransactionController')->middleware('can:kasir');

Route::group(['prefix' => 'admin', 'middleware' => 'can:admin'], function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard.index');
    Route::resource('menu', 'Admin\MenuController');

    Route::get('ingredients/all', 'Admin\IngredientController@getIngredients')->name('ingredients.all');
    Route::resource('ingredients', 'Admin\IngredientController');

    Route::resource('user', 'Admin\UserController');
    Route::get('/transaction-list',[TransactionListController::class, 'index'])->name('transactionList');
    Route::get('/exportRevenue',[TransactionListController::class, 'exportrevenue']);
});



Route::prefix('login')->group(function () {
    Route::get('', 'AuthController@index')->name('auth.index');
    Route::post('auth', 'AuthController@Auth')->name('auth');
    Route::post('logout', 'AuthController@logout')->name('auth.logout');
});
