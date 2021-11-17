<?php

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');


//Home/Index
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//About
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('about-us');

//Contact
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us/-submit', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us.store');

//Contact
Route::get('/join-us', [App\Http\Controllers\JoinUsController::class, 'index'])->name('join-us');

//Volunteer
Route::get('/volunteer', [App\Http\Controllers\VolunteerController::class, 'index'])->name('volunteer');
Route::post('/volunteer-submit', [App\Http\Controllers\VolunteerController::class, 'store'])->name('volunteer.store');


//Our Team
Route::get('/our-team', [App\Http\Controllers\TeamController::class, 'index'])->name('our-team');

//Speak With Us
Route::get('/speak-with-us', [App\Http\Controllers\SpeakWithUsController::class, 'index'])->name('speak-with-us');

//Write for Us
Route::get('/write-for-us', [App\Http\Controllers\WriteForUsController::class, 'index'])->name('write-for-us');

//Partner with Us
Route::get('/partner-with-us', [App\Http\Controllers\PartnerWithUsController::class, 'index'])->name('partner-with-us');

//Events
Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/latest-event', [App\Http\Controllers\EventController::class, 'latestEvent'])->name('latest-event');
Route::get('/past-event', [App\Http\Controllers\EventController::class, 'pastEvent'])->name('past-event');
Route::get('/next-event', [App\Http\Controllers\EventController::class, 'comingEvent'])->name('next-event');
Route::get('/event-details/{slug}', [App\Http\Controllers\EventController::class, 'view'])->name('event-details');


//Donate
Route::get('/donate', [App\Http\Controllers\DonateController::class, 'index'])->name('donate');

//Download
Route::get('/downloads', [App\Http\Controllers\DownloadController::class, 'index'])->name('downloads');

//Podcast
Route::get('/podcast', [App\Http\Controllers\PodcastController::class, 'index'])->name('podcast');

//Thematic Areas
Route::get('/thematic-areas', [App\Http\Controllers\ThematicAreasController::class, 'index'])->name('thematic-areas');

//Blog
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog-details/{slug}', [App\Http\Controllers\BlogController::class, 'view'])->name('blog-details');


//SendEmail
Route::post('/quick-enquiry', [App\Http\Controllers\EmailSubsController::class, 'store'])->name('quickEnquiry');



// admin routes
Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::post('/images/upload', [App\Http\Controllers\Admin\CkeditorController::class, 'upload'])->name('ckeditor.image-upload');


    Route::get('/team', [App\Http\Controllers\Admin\TeamController::class, 'index'])->name('admin.team.index');
    Route::get('/team/create', [App\Http\Controllers\Admin\TeamController::class, 'create'])->name('admin.team.create');
    Route::post('/team/store', [App\Http\Controllers\Admin\TeamController::class, 'store'])->name('admin.team.store');
    Route::get('/team/edit/{id}', [App\Http\Controllers\Admin\TeamController::class, 'edit'])->name('admin.team.edit');
    Route::post('/team/update/{id}', [App\Http\Controllers\Admin\TeamController::class, 'update'])->name('admin.team.update');
    Route::get('/team/destroy/{id}', [App\Http\Controllers\Admin\TeamController::class, 'destroy'])->name('admin.team.destroy');
    Route::get('/team/destroyImage/{id}', [App\Http\Controllers\Admin\TeamController::class, 'destroyImage'])->name('admin.team.destroyImage');

    Route::get('/about-us', [App\Http\Controllers\Admin\AboutUsController::class, 'index'])->name('admin.about-us.index');
    Route::post('/about-us/store', [App\Http\Controllers\Admin\AboutUsController::class, 'store'])->name('admin.about-us.store');
    Route::post('/about-us/update', [App\Http\Controllers\Admin\AboutUsController::class, 'update'])->name('admin.about-us.update');
    Route::get('/about-us/destroyImage/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'destroyImage'])->name('admin.about-us.destroyImage');

    Route::get('/events', [App\Http\Controllers\Admin\EventController::class, 'index'])->name('admin.event.index');
    Route::get('/event/create', [App\Http\Controllers\Admin\EventController::class, 'create'])->name('admin.event.create');
    Route::post('/event/store', [App\Http\Controllers\Admin\EventController::class, 'store'])->name('admin.event.store');
    Route::get('/event/edit/{id}', [App\Http\Controllers\Admin\EventController::class, 'edit'])->name('admin.event.edit');
    Route::post('/event/update/{id}', [App\Http\Controllers\Admin\EventController::class, 'update'])->name('admin.event.update');
    Route::get('/event/destroy/{id}', [App\Http\Controllers\Admin\EventController::class, 'destroy'])->name('admin.event.destroy');
    // Route::get('/team/destroyBanner/{id}', [App\Http\Controllers\Admin\EventController::class, 'destroyBanner'])->name('admin.team.destroyBanner');
    // Route::get('/team/destroyImage/{id}', [App\Http\Controllers\Admin\EventController::class, 'destroyImage'])->name('admin.team.destroyImage');

    Route::get('/volunteer', [App\Http\Controllers\Admin\VolunteerFormController::class, 'index'])->name('admin.volunteer.index');
    Route::get('/volunteer/view/{id}', [App\Http\Controllers\Admin\VolunteerFormController::class, 'show'])->name('admin.volunteer.view');
    Route::get('/volunteer/destroy/{id}', [App\Http\Controllers\Admin\VolunteerFormController::class, 'destroy'])->name('admin.volunteer.destroy');

    Route::get('/contact-us', [App\Http\Controllers\Admin\ContactUsFormController::class, 'index'])->name('admin.contact-us.index');
    Route::get('/contact-us/view/{id}', [App\Http\Controllers\Admin\ContactUsFormController::class, 'show'])->name('admin.contact-us.view');
    Route::get('/contact-us/destroy/{id}', [App\Http\Controllers\Admin\ContactUsFormController::class, 'destroy'])->name('admin.contact-us.destroy');

    Route::get('/blog', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog/store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blog/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('/blog/update/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('admin.blog.update');
    Route::get('/blog/destroy/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('admin.blog.destroy');
    Route::get('/blog/destroyBanner/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroyBanner'])->name('admin.blog.destroyBanner');
    Route::get('/blog/destroyImage/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroyImage'])->name('admin.blog.destroyImage');

});


