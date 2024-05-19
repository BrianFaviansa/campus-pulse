<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;

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

Route::get('/', [LandingController::class, 'index']);
Route::get('/about', [LandingController::class, 'about']);
Route::get('/community', [LandingController::class, 'community']);
Route::get('/competitions', [LandingController::class, 'competitions']);
Route::get('/scholarships', [LandingController::class, 'scholarships']);
Route::get('/internships', [LandingController::class, 'internships']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::prefix('/dashboard/admin')->group(function () {
            Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard.admin');

            Route::get('/members', [DashboardAdminController::class, 'members'])->name('dashboard.admin.members');

            Route::get('/categories', [DashboardAdminController::class, 'categories'])->name('dashboard.admin.categories');
            Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::put('/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
            Route::delete('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');

            Route::get('/events', [DashboardAdminController::class, 'events'])->name('dashboard.admin.events');
            Route::post('/events/store', [EventController::class, 'store'])->name('admin.events.store');
        });
    });

    Route::prefix('/dashboard/user')->group(function () {
        Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard.user');
    });



    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
