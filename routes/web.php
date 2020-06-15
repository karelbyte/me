<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

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


Route::post('/send_me_mail', function (Request $request) {
  try {
      $score = RecaptchaV3::verify($request->get('g-recaptcha-response'), 'register');
      if($score > 0.7) {
          Mail::to('karelpuerto78@gmail.com')->send(new \App\Mail\ContactEmailToMe($request->all()));
          Mail::to($request->email)->send(new \App\Mail\ContactEmail($request->all()));
          return redirect('/#contact')->with('msj', 'Su mensaje ha sido enviado!');
      }
  } catch (\Exception $exception) {
      return redirect('/#contact')->with('error', 'A ocurrido un error :(, intentelo en unos minutos!');
  }

})->name('sendmail');

