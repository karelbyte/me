<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
});

Route::get('/mail', function () {
    $data = [
        'name' => 'karel',
        'msj' => 'Golly gosh, never raid a pirate.'
    ];
    return view('email', compact('data'));
});

Route::post('/send_me_mail', function (Request $request) {
  Mail::to('karelpuerto78@gmail.com')->send(new \App\Mail\ContactEmail($request->all()));
  Mail::to($request->email)->send(new \App\Mail\ContactEmail($request->all()));
  return redirect()->back();
})->name('sendmail');

