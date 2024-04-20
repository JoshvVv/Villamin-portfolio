<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\workController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AuthController;

    Route::get('/', [homeController::class, 'index'])->name('home.index');





//admin
Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
Route::get('/admin/homeupdate', [adminController::class, 'home'])->name('admin.home');
Route::post('/admin/homeupdate/{id}/save', [adminController::class, 'update'])->name('admin.save');
Route::get('/admin/updatepass', [adminController::class, 'updatepass'])->name('admin.updatepass');
Route::post('/admin/homeupdate/pass', [adminController::class, 'savepass'])->name('admin.pass');

// login
Route::get('/login', [loginController::class, 'index'])->name('login.index');
Route::post('/auth', [AuthController::class, 'login'])->name('login.auth');
Route::post('/verify', [AuthController::class, 'verify'])->name('login.verify');
Route::get('/reset', [AuthController::class, 'newpass'])->name('login.reset');
Route::get('/forgot', [loginController::class, 'forgot'])->name('login.forgot');
Route::get('/newpass', [AuthController::class, 'newpass'])->name('login.newpass');
Route::post('/savepass', [AuthController::class, 'savepass'])->name('login.savepass');
Route::get('/logout', [AuthController::class, 'logout'])->name('login.out');

// about admin
Route::get('/about', [aboutController::class, 'index'])->name('about.index');
Route::get('/link/{link}/{target}/', [aboutController::class, 'link'])->name('about.link');
Route::put('/about/{id}/update', [aboutController::class, 'update'])->name('about.update');
Route::post('/about/{id}/bio', [aboutController::class, 'bio'])->name('about.bio');

// skill
Route::get('/skill', [skillController::class, 'index'])->name('skill.index');
Route::post('/skill/add', [skillController::class, 'add'])->name('skill.add');
Route::put('/skill/{id}/add', [skillController::class, 'update'])->name('skill.update');
Route::delete('/skill/{id}/delete', [skillController::class, 'destroy'])->name('skill.delete');

// education
Route::get('/education', [educationController::class, 'index'])->name('education.index');
Route::post('/education/add', [educationController::class, 'add'])->name('education.add');
Route::post('/education/{id}/add', [educationController::class, 'update'])->name('education.update');
Route::delete('/education/{id}/delete', [educationController::class, 'destroy'])->name('education.delete');


// experience
Route::get('/experience', [experienceController::class, 'index'])->name('experience.index');
Route::post('/experience/add', [experienceController::class, 'add'])->name('experience.add');
Route::put('/experience/{id}/add', [experienceController::class, 'update'])->name('experience.update');
Route::delete('/experience/{id}/delete', [experienceController::class, 'destroy'])->name('experience.delete');

// service admin
Route::get('/service', [serviceController::class, 'index'])->name('service.index');
Route::post('/service/add', [serviceController::class, 'add'])->name('service.add');
Route::put('/service/{id}/add', [serviceController::class, 'update'])->name('service.update');
Route::delete('/service/{id}/delete', [serviceController::class, 'destroy'])->name('service.delete');

// work admin
Route::get('/work', [workController::class, 'index'])->name('work.index');
Route::get('/site/{site}', [workController::class, 'site'])->name('site.index');
Route::post('/work/add', [workController::class, 'create'])->name('work.create');
Route::put('/work/update/{id}', [workController::class, 'update'])->name('work.update');
Route::delete('/work/delete/{id}', [workController::class, 'destroy'])->name('work.destroy');

// contact admin
Route::get('/contact', [contactController::class, 'index'])->name('contact.index');
Route::put('/contact/{id}/update', [contactController::class, 'update'])->name('contact.update');

// cv pdf
Route::get('/cv', [homeController::class, 'cv'])->name('cv.index');