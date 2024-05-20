<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PartnershipController;
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
            Route::put('/events/update/{event}', [EventController::class, 'update'])->name('admin.events.update');
            Route::delete('/events/delete/{event}', [EventController::class, 'destroy'])->name('admin.events.delete');

            Route::get('/partnerships', [DashboardAdminController::class, 'partnerships'])->name('dashboard.admin.partnerships');
            Route::post('/partnerships/store', [PartnershipController::class, 'store'])->name('admin.partnerships.store');
            Route::put('/partnerships/update/{partnership}', [PartnershipController::class, 'update'])->name('admin.partnerships.update');
            Route::delete('/partnerships/delete/{partnership}', [PartnershipController::class, 'destroy'])->name('admin.partnerships.delete');


            Route::get('/forums', [DashboardAdminController::class, 'forums'])->name('dashboard.admin.forums');
            Route::post('/forums/store', [ForumController::class, 'store'])->name('admin.forums.store');
            Route::put('/forums/update/{forum}', [ForumController::class, 'update'])->name('admin.forums.update');
            Route::delete('/forums/delete/{forum}', [ForumController::class, 'destroy'])->name('admin.forums.delete');
            Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('forum.show');
            Route::post('/forums/{forum}/comment', [CommentController::class, 'store'])->name('forum.comment.store');

            Route::get('/profile/{user:nama}', [DashboardAdminController::class, 'profile'])->name('dashboard.admin.profile');
            Route::put('/profile/{user:nama}/update', [ProfileController::class, 'update'])->name('dashboard.admin.profile.update');
        });
    });

    Route::prefix('/dashboard/user')->group(function () {
        Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard.user');
        Route::get('/events', [DashboardUserController::class, 'events'])->name('dashboard.user.events');
        Route::post('/events/store', [EventController::class, 'store'])->name('user.events.store');
        Route::put('/events/update/{event}', [EventController::class, 'update'])->name('user.events.update');
        Route::delete('/events/delete/{event}', [EventController::class, 'destroy'])->name('user.events.delete');

        Route::get('/partnerships', [DashboardUserController::class, 'partnerships'])->name('dashboard.user.partnerships');
        Route::post('/partnerships/store', [PartnershipController::class, 'store'])->name('user.partnerships.store');


        Route::get('/profile', [DashboardUserController::class, 'profile'])->name('dashboard.user.profile');
        Route::put('/profile/update', [ProfileController::class, 'update'])->name('dashboard.user.profile.update');

        Route::get('/forums', [DashboardUserController::class, 'forums'])->name('dashboard.user.forums');
        Route::post('/forums/store', [ForumController::class, 'store'])->name('user.forums.store');
        Route::put('/forums/update/{forum}', [ForumController::class, 'update'])->name('user.forums.update');
        Route::delete('/forums/delete/{forum}', [ForumController::class, 'destroy'])->name('user.forums.delete');
        Route::get('/forums/{forum}', [ForumController::class, 'show'])->name('user.forum.show');
        Route::post('/forums/{forum}/comment', [CommentController::class, 'store'])->name('user.forum.comment.store');

    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
