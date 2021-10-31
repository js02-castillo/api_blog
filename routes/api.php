<?php
use App\Http\Controllers\ArticleController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['jwt.verify']], function () {

    
    Route::get('articles/{article}', [ArticleController::class,'show']);
    Route::get('articles/{article}/image', [ArticleController::class,'image']);
    Route::post('articles',[ArticleController::class,'store']);
    Route::put('articles/{article}',[ArticleController::class,'update']);
    Route::delete('articles/{article}',[ArticleController::class,'destroy']);

    Route::get('user', [UserController::class,'getAuthenticatedUser'])->name('getAuthenticatedUser');
});

Route::get('articles',[ArticleController::class,'index']);
Route::post('/register', [UserController::class,'register'])->name('register');
Route::post('/login', [UserController::class,'authenticate'])->name('authenticate');
