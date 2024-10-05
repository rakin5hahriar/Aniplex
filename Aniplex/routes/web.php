<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\signup_controller;

use App\Http\Controllers\login_controller;
use App\Http\Controllers\home_controller;

Route::get("/", [home_controller::class, "showHomePage"]);

Route::get("/signup", [signup_controller::class, "get_signup_page"]);
Route::post("/signup", [signup_controller::class, "post_signup_data"]);


Route::get('/login', [login_controller::class, 'get_login_page']);
Route::post('/login', [login_controller::class,'login']);

Route::get('/dashboard', [login_controller::class,'get_dashboard_page']);

Route::get('/logout', [login_controller::class,'logout']);
