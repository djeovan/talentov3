<?php
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\Backend\AdminController;
use App\Http\controllers\Backend\Usercontroller;
use App\Http\Middleware\admin;
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

require __DIR__.'/auth.php';

//rota admin
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');

//rota user
Route::get('user/dashboard',[Usercontroller::class, 'dashboard'])
->middleware(['auth', 'user'])
->name('user.dashboard');


