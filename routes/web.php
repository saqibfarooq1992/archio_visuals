<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\ExpertController;



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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/add-once' , function(){
    return view('add_once');
})->name('add-once');



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('specializations', SpecializationController::class);
    Route::resource('experts', ExpertController::class);


});

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'welcome');
    Route::get('/about', 'about');
    Route::get('/faq' , 'faq');
    Route::get('/our-team' , 'team');
    Route::get('/service' , 'service');
    Route::get('/service-detail' , 'service_detail');
    Route::get('/project' , 'project');
    Route::get('/project-details' , 'project_details');
    Route::get('/blog' , 'blogs');
    Route::get('/blog-details' , 'blog_detail');
    Route::get('/contact-us' , 'contact');
});
require __DIR__.'/auth.php';
