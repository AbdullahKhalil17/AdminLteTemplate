<?php

use App\Http\Controllers\PosController\Inovices\InvoiceSellController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\PosController\SettingSysyem\UnitController;
use App\Http\Controllers\PosController\SettingSysyem\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', function () {
        return view('home');
    })->name('Home.Dashboard');
    /* = Start Setting System = */
    Route::resource('Product', ProductController::class);
    Route::resource('Unit', UnitController::class);
    /* = End Setting System = */
    

    Route::resource('Inovice', InvoiceSellController::class);


});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
