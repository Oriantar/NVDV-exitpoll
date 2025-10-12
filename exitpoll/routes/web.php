<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\SeatsController;
use App\Models\PoliticalParty;

Route::get('/', function () {
    return view('welcome', [
        'parties' => PoliticalParty::all()
    ]);
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/pdf', [DashboardController::class, 'generatePDF'])->name('dashboard.pdf');
});

Route::get('/public', [SeatsController::class, 'show'])->name('public');

Route::post('/vote', [VoteController::class, 'store'])->name('vote');


require __DIR__.'/auth.php';
