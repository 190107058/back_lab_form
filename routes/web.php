<?php

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

use App\Http\Controllers\UploadController;
Route::get('/multiuploads', [UploadController::class, 'uploadForm']);
Route::post('/multiuploads', [UploadController::class, 'uploadSubmit']);

Route::get('/send/mail', [UploadController::class, 'send']);