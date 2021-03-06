<?php

use App\Http\Controllers\Admin\PostcardController;

Route::permanentRedirect('admin', 'admin/postcards');

Route::get('admin/postcards', [PostcardController::class, 'index']);
Route::post('admin/postcards', [PostcardController::class, 'store']);
Route::delete('admin/postcards/{postcard}', [PostcardController::class, 'delete']);
