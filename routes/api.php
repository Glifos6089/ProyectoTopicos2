<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/handbags', 'App\Http\Controllers\api\HandbagApi@index')->name("api.handbag.index");
Route::get('/covid19', 'App\Http\Controllers\api\covid19Api@index')->name("api.covid19.index");
