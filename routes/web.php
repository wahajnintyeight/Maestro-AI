<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ToolController;
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
})->name('/');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [PageController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/', [PageController::class, 'adminDashboard'])->name('dashboard');
});

Route::group(['prefix' => 'teacher', 'namespace' => 'Teacher', 'middleware' => ['auth', 'teacher'], 'as' => 'teacher.'], function () {

    Route::get('/dashboard', [PageController::class, 'teacherDashboard'])->name('dashboard');
    Route::get('/accountInfo', [PageController::class, 'teacherAccountInfo'])->name('teacherAccountInfo');

    Route::get('/lesson-planner', [ToolController::class, 'showLessonPlanner'])->name('showLessonPlanner');
    Route::post('/lesson-planner', [ToolController::class, 'generateLessonPlanner'])->name('generateLessonPlanner');
});



Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);

require __DIR__ . '/auth.php';
