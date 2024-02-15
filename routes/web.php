<?php

use App\Http\Controllers\AdminDashController;
use App\Http\Controllers\ArtisteDashController;
use App\Http\Controllers\AssagineArtisteController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//////////////////////////////////////////////////////

Route::middleware(['auth', 'admin'])->group(function(){
    Route::resource('Dash', AdminDashController::class);
    Route::post('projects/assign-artist', [ProjectController::class, 'assignArtist'])
    ->name("projects.assignArtist");

   Route::resource('users', UserController::class);
   Route::resource('projects', ProjectController::class );
   Route::resource('partners', PartnerController::class);
});



    // ->middleware(['auth', 'admin']);

Route::middleware(['auth', 'artiste'])->group(function(){
   Route::resource('DashArt', ArtisteDashController::class);
});

// Route::middleware(['auth', 'partner', 'artiste'])->group(function(){
//      Route::resource('projects', );
//      Route::resource('partners', );
//      Route::resource('artistes',);
// });



require __DIR__.'/auth.php';
