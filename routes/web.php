<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('backend.partials.mainContent');
});

// Route::get('/home', function () {
//     return view('admin');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/home', [AdminController::class, 'admin']);
    // Employee Route
    Route::get('/index', [AdminController::class, 'add']);
    Route::post('/insert_employee', [AdminController::class, 'insert']);
    Route::get('/all_employee', [AdminController::class, 'all']);
    Route::get('/view_employee/{id}', [AdminController::class, 'viewEmployee']);
    Route::get('/delete_employee/{id}', [AdminController::class, 'destroy']);
    Route::get('/edit_employee/{id}', [AdminController::class, 'edit']);
    Route::post('/update_employee/{id}', [AdminController::class, 'update']);

    // Customer Route
    Route::get('/add_customer', [CustomerController::class, 'add']);
    Route::post('/insert_customer', [CustomerController::class, 'insert']);
    Route::get('/all_customer', [CustomerController::class, 'all']);
    Route::get('/view_customer/{id}', [CustomerController::class, 'viewCustomer']);
    Route::get('/delete_customer/{id}', [CustomerController::class, 'destroy']);
    Route::get('/edit_customer/{id}', [CustomerController::class, 'edit']);
    Route::post('/update_customer/{id}', [CustomerController::class, 'update']);
    // Supplier Route
    Route::get('/add_supplier', [SupplierController::class, 'addSupplier']);
    Route::post('/insert_supplier', [SupplierController::class, 'insertSupplier']);
    Route::get('/all_supplier', [SupplierController::class, 'allSupplier']);
    Route::get('/view_supplier/{id}', [SupplierController::class, 'viewSupplier']);
    Route::get('/delete_supplier/{id}', [SupplierController::class, 'destroy']);
    Route::get('/edit_supplier/{id}', [SupplierController::class, 'edit']);
    Route::post('/update_supplier/{id}', [SupplierController::class, 'update']);

    // Salery routes start from here
    Route::get('/advanced_salary', [SalaryController::class, 'advanced']);
    Route::post('/insert_advanced_salary', [SalaryController::class, 'advancedSalaryInsert']);
    Route::get('/all_advanced_salary', [SalaryController::class, 'allAdvancedSalary']);
    Route::get('/pay_salary', [SalaryController::class, 'paySalary']);

    // Category
    Route::get('/category', [CategoryController::class, 'addCategory']);
    Route::post('/add_category', [CategoryController::class, 'insertCategory']);
    Route::get('/all_category', [CategoryController::class, 'allCategory']);
    Route::get('/edit_category/{id}', [CategoryController::class, 'editCategory']);
    Route::post('/update_category/{id}', [CategoryController::class, 'updateCategory']);
    Route::get('/delete_category/{id}', [CategoryController::class, 'deleteCategory']);

    // Product Route Start
    Route::get('/add_product', [ProductController::class, 'addproduct']);
    Route::post('/insert_product', [ProductController::class, 'insertProduct']);
    Route::get('/all_product', [ProductController::class, 'allProduct']);
    Route::get('/edit_product/{id}', [ProductController::class, 'editProduct']);
    // Route::post('/update_category/{id}', [ProductController::class, 'updateCategory']);
    // Route::get('/delete_category/{id}', [ProductController::class, 'deleteCategory']);

    // pos route start
    // Route::get('pos', [PosController::class, 'pos']);
    // Route::get('pos_show', [PosController::class, 'showPos']);

    // cart route start
    Route::post('/add_cart/{id}', [CartController::class, 'index']);
    Route::get('/cart_update/{id}', [CartController::class, 'cartUpdate']);


    // pos
    Route::get('pos', [PosController::class, 'pos']);
    Route::get('pos_show', [PosController::class, 'showPos']);
});


require __DIR__ . '/auth.php';
