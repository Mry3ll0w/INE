<?php
namespace App\Http\Controllers;
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

Route::get("/", [ProductController::class, "welcome"])->name("home");

Route::get("/user/logout", [UserController::class, "logout"])->name("logout");

Route::get("/user", [UserController::class, "edit"])->name("user.edit");

Route::patch("/product/{product}", [ProductController::class, "update"])->name("product.update");

Route::get("/product/edit/{product}", [ProductController::class, "edit"])->name("product.edit");


Route::patch("/user", [UserController::class, "update"])->name("user.update");

Route::get("/cart", [CartController::class, "show"])->name("cart.show");
Route::get("/cart/{operation}/{product}", [
    CartController::class,
    "operation",
])->name("cart.operation");
Route::get("/cart", [CartController::class, "show"])->name("cart.show");

Route::get("/product/{product}", [ProductController::class, "show"])->name(
    "product.show"
);

Route::get(
    "/addToCart/{product}",
    "App\Http\Controllers\ProductController@addToCart"
)->name("cart.add");

Route::middleware(['role.editor'])->group(function () {
    Route::patch("/product/{product}", [ProductController::class, "update"])->name("product.update");
    Route::get("/product/edit/{product}", [ProductController::class, "edit"])->name("product.edit");    
});

Route::middleware([
    "auth:sanctum",
    config("jetstream.auth_session"),
    "verified",
])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard");
});
