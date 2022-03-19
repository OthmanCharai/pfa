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
    return view('influencers.profile.plans');
});

Route::prefix('influencers')->name('influencers.')->group(function(){
    Route::get('dashbord',function(){
        return view('influencers.dashbord');
    })->name('dashbord');
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
