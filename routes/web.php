<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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


Route::get('/multiuploads', [UploadController::class, 'uploadForm']);
Route::post('/multiuploads', [UploadController::class, 'uploadSubmit']);

Route::get('/send/mail', [UploadController::class, 'send']);

Route::get('/multiuploads/{locale}', function ($lang){
    App::setlocale($lang);
    return view('Upload_form');
});
