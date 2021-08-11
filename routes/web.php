<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TaskControler;
use App\Models\Task;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\task;

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
Route::get('/', [TaskControler::class,'index'])->name('home');
/**
 * Add tasks
 */
Route::get('/tasks', [TaskControler::class, 'index']);
Route::post('/tasks', [TaskControler::class,'store'])->name('task.store');
/**
 * Delete tasks
 */
Route::delete('/task/{id}', function(Request $request){

});
/**
 * Change Language
 */
Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('user.change-language');

Route::group(['middleware' => 'locale'], function () {
    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])
        ->name('user.change-language');
});
