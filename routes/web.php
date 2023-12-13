<?php

use App\Http\Controllers\CadastroController;

use App\Http\Controllers\FirstRegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Middleware\AdminMiddleware;

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

require __DIR__.'/auth.php';




Route::get('/cadastro', [CadastroController::class, 'index'])->middleware('auth');;

// -> firstRegister
Route::get('/first-register', [FirstRegisterController::class, 'create'])->middleware('auth');;
Route::post('/first-register', [FirstRegisterController::class, 'store'])->name('register.user');
Route::get('/first-register/read', [FirstRegisterController::class, 'show'])->middleware('auth');;



