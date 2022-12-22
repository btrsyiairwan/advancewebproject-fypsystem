<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\svControl;

use Illuminate\Http\Request;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[homeControl::class,"index"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);
Route::get("/main",[homeControl::class,"redirectFunct"]);
Route::get("/users",[homeControl::class,"user"]);

Route::view('addStud','admin.addStud');
Route::POST('add',[adminControl::class,'addData']);
Route::get("projectlist",[adminControl::class,'show']);

Route::get('del/{id}',[adminControl::class,'deleteStud']);

Route::get('supervisorlist',[svControl::class,'listOut']);
Route::get('upd/{id}',[svControl::class,'showStud']);
Route::POST("edit",[svControl::class,'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
