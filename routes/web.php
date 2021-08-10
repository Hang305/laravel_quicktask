<?php

use App\Http\Controllers\LanguageController;
use App\Models\Task;
use Illuminate\Support\Facades\Request;
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

/**
 * Displaying Existing Tasks
 */
Route::get('/', function () {
    return view('tasks');
});
/**
 * Add tasks
 */
Route::post('/task', function (Request $request) {
    //
});
/**
 * Delete tasks
 */
Route::delete('/task/{id}', function (Task $id) {

});
/**
 * Change Language
 */
Route::get('change-language/{language}', [LanguageController::class,'changeLanguage'])->name('user.change-language');

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', [LanguageController::class,'changeLanguage'])
        ->name('user.change-language');
});
