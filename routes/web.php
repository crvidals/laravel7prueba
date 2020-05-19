<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/productos', function () {
    return view('products');
})->name('products');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::post('messages', function () {
    $info = request()->all();
    Mail::send('emails.correo_contacto', $info, function ($message) use ($info) {
        $message->from($info['email'], $info['name']);
        $message->to('crvidals@gmail.com', 'Rodrigo Sanhueza');
        $message->subject($info['subject']);
    });
    return back()->with('msj_flash', 'El correo ha sido enviado. Pronto estaremos en contacto.');
})->name('messages');
