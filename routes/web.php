<?php
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenericsController;
use App\Http\Controllers\ArticlesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/prodcuts', [ProductController::class, 'store'])->name('product.store');

Route::get('/a-propos-de-nous', [GenericsController::class, 'index'])->name("about_us.index");

Route::get('/', [GenericsController::class, 'index'])->name("generics.index");
Route::get('/nos-articles', [ArticlesController::class, 'index'])->name("articles.index");