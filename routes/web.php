<?php

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
    return view('guest.home');
});

Route::prefix('guest')->name('guest.')->group(function () {
    Route::get('/home',function(){
        return view('guest.home');
    })->name('home');
    Route::get('/about',function(){
        return view('guest.about');
    })->name('about');
    Route::get('/contact',function(){
        return view('guest.contact');
    })->name('contact');
    Route::get('/faqs',function(){
        return view('guest.faqs');
    })->name('faqs');
    Route::get('/products',function(){
        return view('guest.products');
    })->name('products');
});

Route::prefix('influencers')->name('influencers.')->group(function(){
    Route::get('dashbord',function(){
        return view('influencers.dashbord');
    })->name('dashbord');
    Route::get('products',function(){
        return view('influencers.product');
    }
    )->name('products');

    Route::prefix('profile')->name('profile.')->group(function(){
            Route::get('account',function(){
                return view('influencers.profile.account');
            })->name('account');
            Route::get('security',function(){
                return view('influencers.profile.security');
            })->name('security');
            Route::get('plans',function(){
                return view('influencers.profile.plans');
            })->name('plans');

        }
    );
});
