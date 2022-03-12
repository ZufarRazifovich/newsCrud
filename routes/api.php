<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/createNews',      [NewsController::class, 'postCreateNews']);         //создание новости
Route::post('/updateNews',      [NewsController::class, 'postUpdateNews']);         //обновление
Route::post('/deleteNews',      [NewsController::class, 'postDeleteNews']);         //удаление
Route::get('/news',             [NewsController::class, 'getNews']);                //все новости
Route::post('/fullNews',        [NewsController::class, 'postFullNews']);           //новость по id
