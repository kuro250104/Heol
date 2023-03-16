<?php
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenericsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PaymentController;

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


Route::get('/', [GenericsController::class, 'index'])->name("generics.index");

Route::get('/prodcuts', [ProductController::class, 'store'])->name('product.store');

Route::get('/a-propos-de-nous', [AboutUsController::class, 'index'])->name("generics.about_us");

Route::get('/nos-articles', [ArticlesController::class, 'index'])->name("articles.index");
Route::get('/article', [ArticlesController::class, 'show'])->name("articles.show");


Route::get('/votre-panier', [PaymentController::class, 'index'])->name("payment.checkout");
Route::get('/moyen-de-payement', [PaymentController::class, 'payment'])->name("payment.payment");
Route::get('/confirmation-du-payement', [PaymentController::class, 'confirmation_payment'])->name("payment.confirmation");


