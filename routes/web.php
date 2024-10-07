<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\SkillsAboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;




use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');



Route::middleware('auth')->prefix('dashboard')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/about', [AdminController::class, 'about'])->name('dashboard.about');
    Route::get('/hero', [AdminController::class, 'hero'])->name('dashboard.hero');
    Route::get('/navber-create', [AdminController::class, 'navber_create'])->name('navber_create');
    Route::get('/navber-list', [AdminController::class, 'navber_list'])->name('navber_list');
    Route::get('/profile-list', [AdminController::class, 'protfolio_list'])->name('protfolio_list');
    Route::get('/resume', [AdminController::class, 'resume'])->name('dashboard.resume');
    Route::get('resume-list',[AdminController::class,'resume_list'])->name('resumes_list');
    Route::delete('/education/{id}', [AdminController::class, 'destroy'])->name('education.destroy');
    Route::delete('/experience/{id}', [AdminController::class, 'experience_destroy'])->name('experience.destroy');

    
    Route::get('/service-create', [AdminController::class, 'service_create'])->name('service_create');
    
    
    
    Route::get('/service-list', [AdminController::class, 'service_list'])->name('service_list');
    Route::get('/skills', [AdminController::class, 'skills'])->name('dashboard.skills');
    Route::get('/statas', [AdminController::class, 'statas'])->name('dashboard.statas');
    Route::get('/testimonials-create', [AdminController::class, 'testimonials_create'])->name('testimonials_create');
    Route::get('/testimonials-list', [AdminController::class, 'testimonials_list'])->name('testimonials_list');

    Route::put('/navber/update/{id}', [NavberController::class, 'update'])->name('navber.update');
    Route::post('/hero/update/', [HeroSectionController::class, 'update'])->name('hero.update');
    Route::post('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::post('/stats/{id}', [StatsController::class, 'store'])->name('stats.store');


    Route::post('/skills/about/', [SkillsAboutController::class, 'store'])->name('skillsabout.store');

    Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
    Route::delete('/skills/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');


    Route::post('/resume', [ResumeController::class, 'storeResume'])->name('storeResume');
    Route::post('/education', [ResumeController::class, 'storeEducation'])->name('storeEducation');
    Route::post('/experience', [ResumeController::class, 'storeExperience'])->name('storeExperience');


    Route::get('/profile-create', [AdminController::class, 'protfolio_create'])->name('protfolio_create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');



    Route::post('/description/update/{id}', [ServiceController::class, 'update'])->name('service_description.update');

    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');


    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');


    Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');



    Route::get('/contact', [AdminController::class, 'contact'])->name('dashboard.contact');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');


    Route::post('/send-contact', [ContactFormController::class, 'send'])->name('contact.send');


});









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';








