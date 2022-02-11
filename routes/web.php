<?php

use App\Http\Controllers\EditorController;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});
Route::resource('books', EditorController::class);
// Route::get('books', [EditorController::class, 'index']);
// Route::post('books', [EditorController::class, 'store'])->name('books.store');
// Route::post('books', [EditorController::class, 'show'])->name('books.show');
Route::get('/summernote-editor-upload', [EmployeeController::class, 'index']);
Route::post('file-upload', [EmployeeController::class, 'fileUpload']);
Route::get('display', [EditorController::class, 'showData']);
Route::post('store', [EditorController::class, 'storeImage']);
