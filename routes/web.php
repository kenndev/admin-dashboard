<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return Inertia::render('admin/Dashboard');
    })->name('dashboard');

    Route::get('/settings', function () {
        return Inertia::render('admin/Settings');
    })->name('settings');

    Route::get('/tables', function () {
        return Inertia::render('admin/Tables');
    })->name('tables');

    Route::get('/maps', function () {
        return Inertia::render('admin/Maps');
    })->name('maps');

    Route::get('/maindash', function () {
        return Inertia::render('Dashboard');
    })->name('maindash');
});


require __DIR__ . '/auth.php';
