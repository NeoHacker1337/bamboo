<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class, 'index'])->name('frontend.index');
Route::get('about',[FrontendController::class ,'about'])->name('frontend.about');
Route::get('our-services',[FrontendController::class,'services'])->name('frontend.services');
Route::get('contact-us',[FrontendController::class,'contactus'])->name('frontend.contact');
Route::get('portfolio',[FrontendController::class,'portfolio'])->name('frontend.portfolio');
Route::get('portfolio-details/{id}',[FrontendController::class,'portfoliodetails'])->name('frontend.portfoliodetails');

// Include Admin Routes
Route::prefix('admin')->group(base_path('routes/admin_routes.php'));