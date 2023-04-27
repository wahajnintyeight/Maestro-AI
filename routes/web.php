<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlanController;
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
    Route::get('/slides-generator', [ToolController::class, 'showSlidesGenerator'])->name('showSlidesGenerator');
    Route::get('/concept-explainer', [ToolController::class, 'showConceptExplainer'])->name('showConceptExplainer');

    Route::get('/view-history', [PageController::class, 'showHistory'])->name('showHistory');

    Route::get('/teacher-tools', [PageController::class, 'showTeacherTools'])->name('showTeacherTools');
    Route::get('/classroom-tools', [PageController::class, 'showClassroomTools'])->name('showClassroomTools');
    Route::get('/free-tools', [PageController::class, 'showFreeTools'])->name('showFreeTools');


    Route::post('/lesson-planner', [ToolController::class, 'generateLessonPlanner'])->name('generateLessonPlanner');
    Route::get('/download-docx', [ToolController::class, 'downloadDocx'])->name('download.docx');

    //Comprehension Generator
    Route::get('/comprehension', [ToolController::class, 'viewForm'])->name('comprehension.form');
    Route::post('/comprehension', [ToolController::class, 'generateComprehensionQuestions'])->name('comprehension.generate');

    Route::post('/concept-explainer', [ToolController::class, 'generateConceptExplainer'])->name('generateConceptExplainer');
    Route::get('/download-concept-docx', [ToolController::class, 'downloadConceptDocx'])->name('downloadConceptDocx');
    Route::get('/download-concept-pdf', [ToolController::class, 'downloadConceptPDF'])->name('downloadConceptPDF');


    // Stripe Payment
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});



Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);

require __DIR__ . '/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
