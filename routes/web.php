<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\GalleryWisataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KIM\KIMController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\POKDARWIS\POKDARWISController;
use App\Http\Controllers\SinglePostController;
use Illuminate\Support\Facades\Auth;
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

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/paket-wisata", [PaketController::class, "index"])->name(
    "paket-wisata"
);
Route::get("/detail", [DetailController::class, "index"])->name("detail");
Route::get("/informasi", [InformasiController::class, "index"])->name(
    "informasi"
);
Route::get("/gallery", [GalleryWisataController::class, "index"])->name(
    "gallery-wisata"
);
Route::get("/single-post", [SinglePostController::class, "index"])->name(
    "single-post"
);
Route::get("/checkout", [CheckoutController::class, "index"])->name("checkout");
Route::get("/checkout/success", [CheckoutController::class, "success"])->name(
    "checkout-success"
);

// Admin Route

Route::prefix("kim")
    ->namespace("KIM")
    ->middleware(["auth", "kim"])
    ->group(function () {
        Route::get("/", [KimController::class, "index"])->name("kim");
    });

Route::prefix("pokdarwis")
    ->namespace("POKDARWIS")
    ->middleware(["auth", "pokdarwis"])
    ->group(function () {
        Route::get("/", [PokdarwisController::class, "index"])->name(
            "pokdarwis"
        );
        Route::resource("travel-package", "TravelPackageController");
        Route::resource("photo", "PhotoController");
        Route::resource("gallery", "GalleryController");
        Route::resource("owner", "OwnerController");
    });

Auth::routes(["verify" => true]);
