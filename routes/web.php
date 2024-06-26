<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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



Route::get('/', [CustomerController::class, 'CustomerIndex'])->name('customer.index');
Route::get('/products', [CustomerController::class, 'CustomerProduct'])->name('customer.product');

Route::get('/products/details/{id}', [CustomerController::class, 'Customerdetials'])->name('customer.product.detials');

Route::get('/about-us', [CustomerController::class, 'CustomerAbout'])->name('customer.about');
Route::get('/contact', [CustomerController::class, 'CustomerContact'])->name('customer.contact');
Route::get('/cart', [CustomerController::class, 'CustomerCart'])->name('customer.cart');





Route::middleware(['auth'])->group(function () {


    Route::get('/checkout', [CustomerController::class, 'CustomerCheckout'])->name('customer.checkout');

    Route::get('/checkout/addresses', [CustomerController::class, 'showAddresses'])->name('myaccount.addresses');
    Route::post('/checkout/addresses/add', [CustomerController::class, 'addAddress'])->name('address.add');
    Route::post('/checkout/addresses/edit/{id}', [CustomerController::class, 'editAddress'])->name('address.edit');
    Route::post('/checkout/addresses/delete/{id}', [CustomerController::class, 'deleteAddress'])->name('address.delete');

    Route::post('/order', [CustomerController::class, 'OrderStore'])->name('order.store');



    Route::get('/invoice', [CustomerController::class, 'CustomerInvoice'])->name('customer.invoice');

    Route::get('/myaccount', [CustomerController::class, 'CustomerMyaccount'])->name('customer.myaccount');
    Route::post('/update-profile', [CustomerController::class, 'updateProfile'])->name('update.profile');
    Route::post('/change-password', [CustomerController::class, 'changePassword'])->name('change.password');
    





    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



});  // End Admin group middleware



Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);





require __DIR__ . '/auth.php';



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/Profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/Profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');



    // admin category

    Route::get('/admin/categories', [AdminController::class, 'AdminCategories'])->name('admin.categories');
    Route::get('/admin/create-categories', [AdminController::class, 'AdminCreateCategories'])->name('admin.create.categories');
    Route::post('/admin/categories-store', [AdminController::class, 'AdminCategoriesStore'])->name('admin.categories.store');


    Route::get('/admin/categories/edit/{id}', [AdminController::class, 'AdminEditCategory'])->name('admin.edit.category');
    Route::put('/admin/categories/update/{id}', [AdminController::class, 'AdminUpdateCategory'])->name('admin.update.category');
    Route::delete('/admin/categories/delete/{id}', [AdminController::class, 'AdminDeleteCategory'])->name('admin.delete.category');


    // admin product

    Route::get('/admin/product', [AdminController::class, 'AdminProduct'])->name('admin.product');
    Route::get('/admin/add/product', [AdminController::class, 'AdminAddProduct'])->name('admin.add.product');
    Route::post('/admin/product/store', [AdminController::class, 'AdminProductStore'])->name('admin.product.store');

    Route::get('/admin/product/{id}', [AdminController::class, 'AdminProductView'])->name('admin.product.view');
    Route::get('/admin/product/edit/{id}', [AdminController::class, 'AdminEditProduct'])->name('admin.edit.product');
    Route::put('/admin/product/update/{id}', [AdminController::class, 'AdminUpdateProduct'])->name('admin.update.product');
    Route::delete('/admin/product/delete/{id}', [AdminController::class, 'AdminDeleteProduct'])->name('admin.delete.product');


    Route::get('/admin/orders', [AdminController::class, 'AdminOrder'])->name('admin.order');



});  // End Admin group middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');