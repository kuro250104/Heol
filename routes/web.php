<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenericsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DeliveryController;

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
    return view('generics.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
// });


Route::get('/home', [GenericsController::class, 'index'])->name("generics.index");

Route::get('/prodcuts', [ProductController::class, 'store'])->name('product.store');

Route::get('/a-propos-de-nous', [AboutUsController::class, 'index'])->name("generics.about_us");

Route::get('/nos-articles', [ArticlesController::class, 'index'])->name("articles.index");
Route::get('/article', [ArticlesController::class, 'show'])->name("articles.show");


Route::get('/votre-panier', [DeliveryController::class, 'index'])->name("delivery.index");
Route::post('/ajouter-la-categorie', [DeliveryController::class, 'store'])->name("delivery.store");

Route::get('/moyen-de-payement', [PaymentController::class, 'index'])->name("payment.index");
Route::get('/confirmation-du-payement', [PaymentController::class, 'show'])->name("payment.show");

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__.'/auth.php';
