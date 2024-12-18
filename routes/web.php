<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/idea/myidea', [ideaController::class, 'myidea'])->name('idea.myidea');
Route::get('/idea', [ideaController::class, 'index'])->name('idea.index');
Route::get('/idea/detail/{id}', [ideaController::class, 'show'])->name('idea.detail');
Route::get('/idea/record', [ideaController::class, 'create'])->name('idea.create');
Route::post('/idea/record', [IdeaController::class, 'store'])->name('idea.store');
Route::get('/idea/edit/{id}', [ideaController::class, 'edit'])->name('idea.edit');
Route::post('/idea/edit/{id}', [ideaController::class, 'update'])->name('idea.update');
Route::delete('/idea/destroy/{id}', [ideaController::class, 'destroy'])->name('idea.destroy');



require __DIR__.'/auth.php';