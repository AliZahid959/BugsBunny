<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CareersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\SiteContentController;
use App\Http\Controllers\ContactApplicationController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\JobApplicationController;

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

Route::get('fresh_start', function(){
    Artisan::call('migrate:fresh --seed');
    return 'Fresh Start Has Now Complete';
});

Route::get('migrate',function(){
    Artisan::call('migrate');
    dd('migrate');
    return 'Migration Has Now Complete';

 });

Route::get('optimize', function(){
    Artisan::call('optimize:clear');
    return 'Your Application is now optimized';
});

Route::get('storage-link', function(){

     $target = storage_path('app/public');
     $link = $_SERVER['DOCUMENT_ROOT'].'/storage';
     symlink($target, $link);
     return 'Storage Link updated';
});




Route::group(['middleware' => 'front-page'], function(){

    Route::get('/', [FrontPageController::class, 'index'])->name('index');
    
    Route::get('about', [FrontPageController::class, 'about'])->name('front.page.about');
    
    Route::get('contact', [FrontPageController::class, 'contact'])->name('front.page.contact');
    
    Route::get('services', [FrontPageController::class, 'services'])->name('front.page.services');
    
    Route::get('services/{service:slug}', [FrontPageController::class, 'service'])->name('front.page.service.show');
    
    Route::get('teams', [FrontPageController::class, 'teams'])->name('front.page.teams');
    
    Route::get('teams/{team:slug}', [FrontPageController::class, 'team'])->name('front.page.teams.show');
    
    Route::get('OurWorks', [FrontPageController::class, 'OurWorks'])->name('front.page.works');
    
    Route::get('Ourworks/{Ourwork:slug}', [FrontPageController::class, 'Ourwork'])->name('front.page.work.show');
    
    Route::get('careers', [FrontPageController::class, 'careers'])->name('front.page.careers');
    
    Route::get('careers/{careers:slug}', [FrontPageController::class, 'career'])->name('front.page.career.show');
    
    Route::resource('contact-application', ContactApplicationController::class);

    Route::resource('job-application', JobApplicationController::class);

});



/* Dashboard Routes */



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function(){
    Auth::routes();


    Route::group(['middlware' => 'auth'] ,function(){

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('team', TeamController::class, ['parameters' => [
            'team' => 'team:slug'
        ]]);

        Route::resource('service', ServiceController::class, ['parameters' => [
            'service' => 'service:slug'
        ]]);

        Route::resource('careers', CareersController::class, ['parameters' => [
            'careers' => 'careers:slug'
        ]]);

        Route::resource('work', WorkController::class, ['parameters' => [
            'work' => 'work:slug'
        ]]);


        Route::get('about', [AboutPageController::class, 'index'])->name('about.settings');
        Route::patch('about/store', [AboutPageController::class, 'store'])->name('about.store');

        Route::get('contact', [ContactPageController::class, 'index'])->name('contact.settings');
        Route::patch('contact/store', [ContactPageController::class, 'store'])->name('contact.store');

        Route::get('setting', [SiteContentController::class, 'index'])->name('setting');
        Route::patch('setting/store', [SiteContentController::class, 'store'])->name('setting.store');

        Route::get('change-password', [UserController::class, 'change_password_index'])->name('change-password.index');
        Route::patch('change-password', [UserController::class, 'change_password_update'])->name('change-password.update');
        Route::get('profile', [UserController::class, 'profile_index'])->name('profile.index');
        Route::patch('profile', [UserController::class, 'profile_update'])->name('profile.update');

    });

});
