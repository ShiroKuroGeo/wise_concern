<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\authenticationController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\wiseticketController;
use App\Http\Controllers\wiserequestController;
use App\Http\Controllers\joborderController;
use App\Http\Controllers\Controller;

//Main
Route::get('/', [employeeController::class, 'wiseconcern'])->name('wiseindex');

Route::get('/ticketing', function(){return view('employee/ticket');})->name('emploconcern');

Route::get('/admin', function(){
    return view('admin/dashboard');
})->name('dashboard.admin');

Route::get('/admin/category', function(){
    return view('admin/dashboard');
})->name('category.admin');

Route::get('/admin/reports', function(){
    return view('admin/dashboard');
})->name('reports.admin');

Route::get('/admin/banned', function(){
    return view('admin/dashboard');
})->name('banned.admin');

Route::get('/admin/profile', function(){
    return view('admin/dashboard');
})->name('profile.admin');

//Four Seasons Immigration
Route::get('/wiseForFourSeason', [ticketController::class, 'wiseIndex'])->name('fourseason-index');
Route::get('/ordersForFourSeason', [joborderController::class, 'orderForFourseason'])->name('fourseason-order'); 
Route::get('/requestForFourSeason', [ticketController::class, 'index'])->name('fourseason-request');
Route::post('/storeOrder', [joborderController::class, 'storeOrderForFourseason'])->name('order-store-employee'); 
Route::post('/checkemail', [ticketController::class, 'checkuser'])->name('fourseason-check-email');
Route::post('/ticketstore', [ticketController::class, 'storeticket'])->name('ticket-store-fourseason');
// Route::get('/ticket', [ticketController::class, 'categorychose'])->name('ticket-employee');

//Wise Immigration
Route::get('/request/Wise/{value?}', [ticketController::class, 'categoryChoseRequest'])->name('category-request-employee');
Route::get('/order/Wise/{value?}', [joborderController::class, 'categoryChoseOrder'])->name('category-order-employee');
Route::post('/order/Wise', [wiseticketController::class, 'storeWiseTicket'])->name('store-wise-ticket');
Route::post('/request/Wise', [wiserequestController::class, 'storeWiseRequest'])->name('store-wise-request');

//Admin
Route::post('/login', [authenticationController::class, 'login'])->name('login');
Route::get('/loginadmin', [adminController::class, 'login'])->name('admin-login');
Route::get('/admin/accounts', [adminController::class, 'account'])->name('admin-accounts');
Route::get('/getAllData', [adminController::class, 'retrieveData']);
Route::get('/getAllDataPendingDone', [adminController::class, 'retrieveDataPendingDone']);
Route::post('/admin/createAccount', [adminController::class, 'createAccount'])->name('admin-add-accounts');
Route::get('/admin/restricAccount/{value}', [adminController::class, 'restricAccount'])->name('admin-restric-user');
Route::get('/admin/request/{value}', [adminController::class, 'doneRequest'])->name('admin-done-request');
Route::get('/admin/order/{value}', [adminController::class, 'doneOrders'])->name('admin-done-order');

Route::get('/admin/requestFour/{value}', [adminController::class, 'doneRequestFour'])->name('admin-done-request-four');
Route::get('/admin/orderFour/{value}', [adminController::class, 'doneOrdersFour'])->name('admin-done-order-four');

Route::get('/logginout', [authenticationController::class, 'logout'])->name('admin-logout');
Route::get('/admin/concern/{department?}', [adminController::class, 'concern'])->name('admin-concern');
Route::get('/admin/request', [adminController::class, 'request'])->name('admin-request');
Route::get('/admin/cebudata', [adminController::class, 'getAllCebu'])->name('alldepartmentfromcebu');
Route::get('/admin', [adminController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/donepending/{value?}', [adminController::class, 'donepending'])->name('admin-donepending');
