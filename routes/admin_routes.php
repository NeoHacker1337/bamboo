<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\AdmissionFormController;
use App\Http\Controllers\PORTFOLIOController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
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


Route::get('/',[AdminAuthController::class , 'login'])->name('admin.login');
Route::post('/login', [AdminAuthController::class, 'loginSubmit'])->name('admin.login_submit');

Route::group(['middleware' => 'admin_middle'], function () { 
    Route::get('dashboard',[AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('logout',[AdminAuthController::class,'logout'])->name('admin.logout');
   
    Route::get('slider',[SliderController::class,'index'])->name('admin.slider');
    Route::post('slider',[SliderController::class,'store'])->name('upload.slider');
    Route::get('/sliders-table', [SliderController::class,'getSliders'])->name('admin.getslider');
    Route::get('slider/{id}',[SliderController::class,'destroy'])->name('admin.deleteslider');


    Route::get('profile',[ProfileController::class,'index'])->name('admin.profile');
    Route::post('profile-save',[ProfileController::class,'store'])->name('admin.profile.store');
    Route::post('profile-image-save',[ProfileController::class,'uploadImage'])->name('admin.profile.image');

    Route::get('porfolio',[PORTFOLIOController::class,'index'])->name('admin.porfolio');
    Route::post('porfolio',[PORTFOLIOController::class,'store'])->name('admin.upload.porfolio');
    Route::get('get-portfolio-table',[PORTFOLIOController::class,'getPortfolio'])->name('admin.getPortfolio');
    Route::get('portfolio/{id}',[PORTFOLIOController::class,'destroy'])->name('admin.deleteportfolio');

    Route::get('porfolio-category',[PORTFOLIOController::class,'category'])->name('admin.category.porfolio');
    Route::post('porfolio-category',[PORTFOLIOController::class,'categorysave'])->name('admin.save.porfolio.category');
    Route::get('get-portfolio-category-table',[PORTFOLIOController::class,'getPortfolioCategory'])->name('admin.getPortfolioCategory');
    Route::get('portfolio-category/{id}',[PORTFOLIOController::class,'categoryDelete'])->name('admin.categoryDelete');
    Route::get('/add-more-photos', [PORTFOLIOController::class, 'showPhotos'])->name('portfolio.photos');
    Route::post('/upload-images', [PORTFOLIOController::class, 'uploadImages'])->name('upload.images');
    Route::get('add-more-photos/{id}',[PORTFOLIOController::class,'deleteimage'])->name('admin.deleteimage');
    Route::get('get-portfolio-photos-table',[PORTFOLIOController::class,'imagesDatable'])->name('admin.getimagesDatable');
    
    
    
});