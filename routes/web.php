<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/rank', function () { return view('store'); })->name('rank')->middleware('auth');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/store', function () { return view('page.store'); })->name('store')->middleware('auth');
Route::get('/getmacshellexec',function()
    {
        $shellexec = shell_exec('getmac'); 
        //dd($shellexec);
        echo $shellexec;
    }
);

Route::get('/getmacexec',function()
    {
        //$shellexec = exec('getmac'); 
        //dd($shellexec);
        $shellexec = substr(shell_exec('getmac'), 159,20);
        echo $shellexec;
    }
);
