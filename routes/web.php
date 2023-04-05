<?php
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Promise\Create;
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
    // ->name('profile.destroy'); 부분은 이름으로 인해 연결을 할 수 있도록 하기 위함

    Route::get('/ticket/create', function () {
        return view('ticket.create');
    });
});

Route::get('/create', function () {
    return view('blogs.create');
})->name('blogs.create');

Route::get('/create', function () {
    return view('blogs.create');
})->name('blogs.create');


require __DIR__.'/auth.php';
