<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// front routes

Route::name('front.')->group(function(){
Route::view('/','front.index')->name('index');
Route::view('/about','front.about')->name('about');
Route::view('/service','front.service')->name('service');
Route::view('/contact','front.contact')->name('contact');


});
// admin routed
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {

    // روابط الأدمن داخل مجموعة اللغات
    Route::name('admin.')->prefix('admin')->group(function(){
        
        Route::middleware('auth')->group(function(){
            // هذا الرابط سيكون: /ar/admin
            Route::view('/','admin.index')->name('index'); 

            //services
        Route::controller(ServiceController::class)->group(function(){
        Route::resource('services', ServiceController::class);
        }); 

        });

        require __DIR__.'/auth.php';
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

