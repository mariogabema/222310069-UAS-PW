<?php

use App\Http\Controllers\PreviewPwController;
use App\Http\Controllers\TambahController;
use App\Models\PreviewPw;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/preview-ppb', function () {
    return view('preview-ppb');
});

Route::resource('/preview-pw', PreviewPwController::class);