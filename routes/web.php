<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class,"index"])->name("home");
Route::get("/about-me", [AboutController::class,"index"])->name("about");
Route::get("/projects", [ProjectController::class,"index"])->name("projects");
Route::get("/contact", [ContactController::class,"index"])->name("contact");
Route::post("/contact", [ContactController::class,"sendEmail"])->name("sendEmail");