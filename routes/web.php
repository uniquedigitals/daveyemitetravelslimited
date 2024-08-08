<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SearchController;





Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [HomeController::class,'about'])->name('home.about');
Route::get('/contact-us', [HomeController::class,'contact'])->name('home.contact');
Route::get('/our-gallery', [HomeController::class,'gallery'])->name('home.gallery');
Route::get('/faqs', [HomeController::class,'faqs'])->name('home.faqs');
Route::get('/our-teams', [HomeController::class,'teams'])->name('home.teams');
Route::get('/reviews', [HomeController::class,'reviews'])->name('home.reviews');


Route::get('/apply', [ApplicationController::class, 'index'])->name('application.index');
Route::post('/apply/store', [ApplicationController::class, 'store'])->name('application.store');

//Services Controller
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

//post Controller
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');

//ff Controller
Route::get('/offers', [OfferController::class, 'index'])->name('offer.index');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offer.show');

// Comment
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

// Contact Store
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


// Newsletter Store
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.store');


//Search controller
Route::post('/search', [SearchController::class, 'index'])->name('search.index');



