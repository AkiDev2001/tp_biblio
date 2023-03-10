<?php

use App\Http\Controllers\BiblioController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
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
})->name('welcome');

Route::get('/document', [DocumentController::class, 'download'])->name('document.download');
Route::delete('/document', [DocumentController::class, 'destroy'])->name('document.destroy');

Route::post('/biblio', [BiblioController::class, 'index'])->name('biblio');
Route::get('/biblio', [BiblioController::class, 'index'])->name('biblio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('email', [EmailController::class, 'getForm']);
Route::post('email', ['uses'=>[EmailController::class, 'postForm'], 'as'=>'storeEmail']);


require __DIR__.'/auth.php';
