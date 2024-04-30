<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CasalController;


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

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => 'user'], function(){
    Route::get('/main',[UserController::class,'main'])->name('user.main');
    Route::get('/newCasalForm', [CasalController::class, 'newCasalForm'])->name('newCasalForm');
    Route::post('/addNewCasal', [CasalController::class, 'store'])->name('addNewCasal');
    Route::get('/deleteCasal/{id}', [CasalController::class,'deleteCasal'])->name('deleteCasal');
    Route::get('/updateCasalForm/{id}', [CasalController::class, 'updateCasalForm'])->name('updateCasalForm');
    Route::post('/saveUpdateCasalForm', [CasalController::class, 'saveUpdateCasalForm'])->name('saveUpdateCasalFrom');

});
