<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommunityController;








// Show the form
Route::get('/contact', [ContactController::class,'contact'])
     ->name('contact');

// Handle the POST
Route::post('/contact/submit', [ContactController::class,'submit'])
     ->name('contact.submit');
Route::get('/communities', [CommunityController::class, 'index'])
     ->name('communities.index');

Route::get('/communities/{community}', [CommunityController::class, 'show'])
     ->name('communities.show');


Route::get('/resources', [ResourceController::class, 'index'])
     ->name('resources.index');

Route::get('/resources/{resource}', [ResourceController::class, 'show'])
     ->name('resources.show');


Route::get('contact-messages', [ContactController::class,'index'])
     ->name('contact.messages')
     ->middleware('auth');


// GET /contact (you probably already have this)
Route::get('/contact', [PageController::class, 'contact'])
     ->name('contact');

// NEW: handle the form submission
Route::post('/contact', [ContactController::class, 'submit'])
     ->name('contact.submit');



Route::get('/resources', [ResourceController::class, 'index'])
     ->name('resources.index');

     Route::get('resources/{resource}', [ResourceController::class, 'show'])
     ->name('resources.show');

Route::get('resources/{resource}', [ResourceController::class, 'show'])
     ->name('resources.show');

Route::resource('projects', ProjectController::class);



Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/resources', [ResourceController::class, 'index'])->name('resources.index');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('contact-messages', [ContactController::class,'index'])
     ->name('contact.messages')
     ->middleware('auth');


require __DIR__.'/auth.php';
