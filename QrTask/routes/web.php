<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::post('generate-qr', [\App\Http\Controllers\GenerateQrCode::class, 'generate']);
Route::get('export-pdf/{arr}', [\App\Http\Controllers\GenerateQrCode::class, 'exportPdf'])->name('export-pdf');

