<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

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
//default view
Route::get('/', function () {
    return view('send_email',);
});
// route for getting view
Route::get('/sendemail', [App\Http\Controllers\SendEmailController::class,'index'])->name('send.mail');
//route for posting mail
Route::post('/sendemail/send', [App\Http\Controllers\SendEmailController::class,'send'])->name('send.mails');
