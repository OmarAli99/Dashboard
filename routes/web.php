<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// front routes

Route::name('front.')->controller(FrontController::class)->group(function(){

Route::get('/','index')->name('index');

Route::get('/about','about')->name('about');

Route::get('/service','service')->name('service');

Route::get('/contact','contact')->name('contact');


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

        Route::controller(FeatureController::class)->group(function(){
        Route::resource('features', FeatureController::class);
        }); 

        Route::controller(MessageController::class)->group(function(){
        Route::resource('messages', MessageController::class)->only(['index','show','destroy']);
        }); 
        Route::controller(SubscriberController::class)->group(function(){
        Route::resource('subscribers', SubscriberController::class)->only(['index','show','destroy']);
        }); 

        Route::controller(TestimonialController::class)->group(function(){
        Route::resource('testimonials', TestimonialController::class);
        }); 

        Route::controller(MemberController::class)->group(function(){
        Route::resource('members', MemberController::class);
        }); 

         Route::controller(SettingController::class)->group(function(){
        Route::resource('settings', SettingController::class);
        }); 

        });

        require __DIR__.'/auth.php';
    });
});


