<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\SocialiteController;



    // home
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home/blog', [HomeController::class, 'blog']);
    Route::get('/home/about', [HomeController::class, 'about'])->name('detail_about');
    Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('detail_blog');
    Route::get('/home/team', [HomeController::class, 'team']);
    Route::get('/detail_team/{slug}', [HomeController::class, 'detail_team'])->name('detail_team');
    Route::get('/home/photo', [HomeController::class, 'photo']);
    Route::get('/blog/standard', [HomeController::class, 'blog_standard']);
    Route::get('/contact', [HomeController::class, 'contact']);



    // blog
// Route::prefix('blog')->group(function () {
//         Route::controller(BlogController::class)->group(function () {
//             Route::get('/blog', 'blog')->name('blog');
//             Route::get('/blog-details', 'blogDetails')->name('blogDetails');
//             Route::get('/blog-standard', 'blogStandard')->name('blogStandard');
//             Route::get('/contact', 'contact')->name('contact');
//         });
// });

    // pages
Route::prefix('pages')->group(function () {
        Route::controller(PagesController::class)->group(function () {
            Route::get('/error', 'pagesError')->name('pagesError');
            Route::get('/project-details', 'projectDetails')->name('projectDetails');
            Route::get('/projects', 'projects')->name('projects');
            // Route::get('/team', 'team')->name('team');
            // Route::get('/team-details', 'teamDetails')->name('teamDetails');
        });
});

    // services
Route::prefix('services')->group(function () {
        Route::controller(ServicesController::class)->group(function () {
            // Route::get('/about', 'about')->name('about');
            Route::get('/air-transport', 'airTransport')->name('airTransport');
            Route::get('/cargo-transport', 'cargoTransport')->name('cargoTransport');
            Route::get('/ocean-freight', 'oceanFreight')->name('oceanFreight');
            Route::get('/rail-transport', 'railTransport')->name('railTransport');
            Route::get('/road-transport', 'roadTransport')->name('roadTransport');
            Route::get('/services', 'services')->name('services');
            Route::get('/warehousing', 'warehousing')->name('warehousing');
        });
});


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//buat artikel
     Route::get('/blog', [BlogController::class, 'index'])->name('blog');
     Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
     Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
     Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
     Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
     Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
     Route::post('/blog/update-status', [BlogController::class, 'updateStatus'])->name('blog.updateStatus');

//buat Team
     Route::get('/team', [TeamController::class, 'index'])->name('team');
     Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
     Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
     Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
     Route::post('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
     Route::post('/team/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
     Route::post('/team/update-status', [TeamController::class, 'updateStatus'])->name('team.updateStatus');
//photo
     Route::get('photo', [PhotoController::class, 'index'])->name('photo');
     Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store');
     Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update');
     Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy');


    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/about/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/about/update', [AboutController::class, 'update'])->name('about.update');

});
// Route::middleware(['auth'])->group(function () {
// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');




