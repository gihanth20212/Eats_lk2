<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\OrderController;

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
    return view('index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('users.index');
    })->name('home');

    Route::get('/foods', function () {
        return view('foods');
    })->name('foods');

    Route::get('rest', [RestaurantController::class, 'myrest'])
        ->name('restaurant.myrest');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/profile', function () {
        return view('users.profile');
    })->name('profile');


    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Restaurant Routes
    Route::resource('restaurant', RestaurantController::class);

    // FoodItem Routes
    Route::resource('fooditems', FoodItemController::class);

    Route::get('cart', [OrderController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [OrderController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [OrderController::class, 'remove'])->name('remove.from.cart');
});

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {

    Route::get('rest', [AdminController::class, 'restmanage'])
        ->name('rest.manage');
    Route::get('food', [AdminController::class, 'foodmanage'])
        ->name('food.manage');

    // Roles and Permissions Routes
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});



require __DIR__ . '/auth.php';
