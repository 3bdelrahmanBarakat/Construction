<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin')->group(function () {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login')->middleware('guest');
    Route::post('login', [AdminController::class, 'login']);
    Route::post('logout', [AdminController::class, 'logout'])->middleware('auth')->name('logout');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('index');

    //Sections routes
    Route::middleware('auth')->prefix('sections')->as('sections.')->group(function(){
        Route::get('/', [SectionsController::class, 'index'])->name('index');
        Route::get('/details/{id}', [SectionsController::class, 'show'])->name('details');
        Route::get('create-detail/{id}', [SectionsController::class, 'createDetail'])->name('create_detail');
        Route::post('store', [SectionsController::class, 'store'])->name('store');
        Route::post('store-detail/{id}', [SectionsController::class, 'storeDetail'])->name('store_detail');
        Route::get('edit/{id}', [SectionsController::class, 'edit'])->name('edit');
        Route::get('edit-details/{id}', [SectionsController::class, 'editDetail'])->name('edit_detail');
        Route::put('update/{id}', [SectionsController::class, 'update'])->name('update');
        Route::put('update-detail/{id}', [SectionsController::class, 'updateDetail'])->name('update_detail');
        Route::delete('image/{id}', [SectionsController::class, 'destroyImage'])->name('image.destroy');
    });
    //logo store and update
    Route::prefix('logo')->group(function(){
        Route::get('create', [LogoController::class, 'create'])->name('logo.create');
        Route::post('store', [LogoController::class, 'store'])->name('logo.store');
        Route::get('edit', [LogoController::class, 'edit'])->name('logo.edit');
        Route::put('update', [LogoController::class, 'update'])->name('logo.update');
    });

    });

    Route::get('/', function () {
        return redirect('/en');
    });

    Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
        Route::get('/',[HomeController::class, 'index'])->name('index');
        Route::get('/about',[AboutController::class, 'index'])->name('about.index');
        Route::get('/project/{id}',[AboutController::class, 'project'])->name('about.project');
    });

