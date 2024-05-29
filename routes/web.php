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

require __DIR__ . '/auth.php';

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


//Our Team and Founder
Route::get('/our-team', [App\Http\Controllers\TeamController::class, 'index'])->name('our-team');
Route::get('/our-founder', [App\Http\Controllers\TeamController::class, 'founder'])->name('our-founder');
Route::get('/old-team', [App\Http\Controllers\TeamController::class, 'oldTeam'])->name('old-team');
Route::post('/old-team', [App\Http\Controllers\TeamController::class, 'oldTeamSearch'])->name('old-team.search');




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

//AGM Report
Route::get('/annual-report', [App\Http\Controllers\annualReportController::class, 'index'])->name('agm-report');


//SendEmail
Route::post('/quick-enquiry', [App\Http\Controllers\EmailSubsController::class, 'store'])->name('quickEnquiry');



// admin routes
// Route::get('/admin/dashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth'])->name('dashboard');



Route::group(['prefix' => 'yfdsystem/admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::post('/images/upload', [App\Http\Controllers\Admin\CkeditorController::class, 'upload'])->name('ckeditor.image-upload');

    Route::get('/team', [App\Http\Controllers\Admin\TeamController::class, 'index'])->name('admin.team.index');
    Route::get('/team/create', [App\Http\Controllers\Admin\TeamController::class, 'create'])->name('admin.team.create');
    Route::post('/team/store', [App\Http\Controllers\Admin\TeamController::class, 'store'])->name('admin.team.store');
    Route::get('/team/edit/{id}', [App\Http\Controllers\Admin\TeamController::class, 'edit'])->name('admin.team.edit');
    Route::post('/team/update/{id}', [App\Http\Controllers\Admin\TeamController::class, 'update'])->name('admin.team.update');
    Route::get('/team/destroy/{id}', [App\Http\Controllers\Admin\TeamController::class, 'destroy'])->name('admin.team.destroy');
    Route::get('/team/destroyImage/{id}', [App\Http\Controllers\Admin\TeamController::class, 'destroyImage'])->name('admin.team.destroyImage');

    // Route::get('/old-team', [App\Http\Controllers\Admin\OldTeamController::class, 'index'])->name('admin.old-team.index');
    // Route::get('/old-team/create', [App\Http\Controllers\Admin\OldTeamController::class, 'create'])->name('admin.old-team.create');
    // Route::post('/old-team/store', [App\Http\Controllers\Admin\OldTeamController::class, 'store'])->name('admin.old-team.store');
    // Route::get('/old-team/edit/{id}', [App\Http\Controllers\Admin\OldTeamController::class, 'edit'])->name('admin.old-team.edit');
    // Route::post('/old-team/update/{id}', [App\Http\Controllers\Admin\OldTeamController::class, 'update'])->name('admin.old-team.update');
    // Route::get('/old-team/destroy/{id}', [App\Http\Controllers\Admin\OldTeamController::class, 'destroy'])->name('admin.old-team.destroy');
    // Route::get('/old-team/destroyImage/{id}', [App\Http\Controllers\Admin\OldTeamController::class, 'destroyImage'])->name('admin.old-team.destroyImage');

    Route::get('/founder', [App\Http\Controllers\Admin\FounderController::class, 'index'])->name('admin.founder.index');
    Route::get('/founder/create', [App\Http\Controllers\Admin\FounderController::class, 'create'])->name('admin.founder.create');
    Route::post('/founder/store', [App\Http\Controllers\Admin\FounderController::class, 'store'])->name('admin.founder.store');
    Route::get('/founder/edit/{id}', [App\Http\Controllers\Admin\FounderController::class, 'edit'])->name('admin.founder.edit');
    Route::post('/founder/update/{id}', [App\Http\Controllers\Admin\FounderController::class, 'update'])->name('admin.founder.update');
    Route::get('/founder/destroy/{id}', [App\Http\Controllers\Admin\FounderController::class, 'destroy'])->name('admin.founder.destroy');
    Route::get('/founder/destroyImage/{id}', [App\Http\Controllers\Admin\FounderController::class, 'destroyImage'])->name('admin.founder.destroyImage');

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
    Route::get('/team/destroyBanner/{id}', [App\Http\Controllers\Admin\EventController::class, 'destroyBanner'])->name('admin.team.destroyBanner');
    Route::get('/team/destroyImage/{id}', [App\Http\Controllers\Admin\EventController::class, 'destroyImage'])->name('admin.team.destroyImage');

    Route::get('/volunteer', [App\Http\Controllers\Admin\VolunteerFormController::class, 'index'])->name('admin.volunteer.index');
    Route::get('/volunteer/view/{id}', [App\Http\Controllers\Admin\VolunteerFormController::class, 'show'])->name('admin.volunteer.view');
    Route::get('/volunteer/destroy/{id}', [App\Http\Controllers\Admin\VolunteerFormController::class, 'destroy'])->name('admin.volunteer.destroy');

    // contact us form
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

    Route::get('/testimonial', [App\Http\Controllers\Admin\TestimonialController::class, 'index'])->name('admin.testimonial.index');
    Route::get('/testimonial/create', [App\Http\Controllers\Admin\TestimonialController::class, 'create'])->name('admin.testimonial.create');
    Route::post('/testimonial/store', [App\Http\Controllers\Admin\TestimonialController::class, 'store'])->name('admin.testimonial.store');
    Route::get('/testimonial/edit/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'edit'])->name('admin.testimonial.edit');
    Route::post('/testimonial/update/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'update'])->name('admin.testimonial.update');
    Route::get('/testimonial/destroy/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');
    Route::get('/testimonial/destroyImage/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'destroyImage'])->name('admin.testimonial.destroyImage');

    Route::get('/member-testimonial', [App\Http\Controllers\Admin\TestimonialMemberController::class, 'index'])->name('admin.member-testimonial.index');
    Route::get('/member-testimonial/create', [App\Http\Controllers\Admin\TestimonialMemberController::class, 'create'])->name('admin.member-testimonial.create');
    Route::post('/member-testimonial/store', [App\Http\Controllers\Admin\TestimonialMemberController::class, 'store'])->name('admin.member-testimonial.store');
    Route::get('/member-testimonial/edit/{id}', [App\Http\Controllers\Admin\TestimonialMemberController::class, 'edit'])->name('admin.member-testimonial.edit');
    Route::post('/member-testimonial/update/{id}', [App\Http\Controllers\Admin\TestimonialMemberController::class, 'update'])->name('admin.member-testimonial.update');
    Route::get('/member-testimonial/destroy/{id}', [App\Http\Controllers\Admin\TestimonialMemberController::class, 'destroy'])->name('admin.member-testimonial.destroy');
    Route::get('/member-testimonial/destroyImage/{id}', [App\Http\Controllers\Admin\TestimonialMemberController::class, 'destroyImage'])->name('admin.member-testimonial.destroyImage');

    Route::get('/podcast', [App\Http\Controllers\Admin\PodcastController::class, 'index'])->name('admin.podcast.index');
    Route::get('/podcast/create', [App\Http\Controllers\Admin\PodcastController::class, 'create'])->name('admin.podcast.create');
    Route::post('/podcast/store', [App\Http\Controllers\Admin\PodcastController::class, 'store'])->name('admin.podcast.store');
    Route::get('/podcast/edit/{id}', [App\Http\Controllers\Admin\PodcastController::class, 'edit'])->name('admin.podcast.edit');
    Route::post('/podcast/update/{id}', [App\Http\Controllers\Admin\PodcastController::class, 'update'])->name('admin.podcast.update');
    Route::get('/podcast/destroy/{id}', [App\Http\Controllers\Admin\PodcastController::class, 'destroy'])->name('admin.podcast.destroy');

    Route::get('/annual-report', [App\Http\Controllers\Admin\AgmReportController::class, 'index'])->name('admin.annual-report.index');
    Route::get('/annual-report/create', [App\Http\Controllers\Admin\AgmReportController::class, 'create'])->name('admin.annual-report.create');
    Route::post('/annual-report/store', [App\Http\Controllers\Admin\AgmReportController::class, 'store'])->name('admin.annual-report.store');
    Route::get('/annual-report/edit/{id}', [App\Http\Controllers\Admin\AgmReportController::class, 'edit'])->name('admin.annual-report.edit');
    Route::post('/annual-report/update/{id}', [App\Http\Controllers\Admin\AgmReportController::class, 'update'])->name('admin.annual-report.update');
    Route::get('/annual-report/destroy/{id}', [App\Http\Controllers\Admin\AgmReportController::class, 'destroy'])->name('admin.annual-report.destroy');

    //settings
    Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings.index');
    Route::post('/contact/update/{id}', [App\Http\Controllers\Admin\ContactController::class, 'update'])->name('admin.contact.update');
    Route::post('/joinus/update/{id}', [App\Http\Controllers\Admin\JoinUssController::class, 'update'])->name('admin.join-us.update');
});