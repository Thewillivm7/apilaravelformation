<?php
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/annonces',[AnnonceController::class,'index']);
Route::post('/addannonces',[AnnonceController::class,'create']);
Route::put('/updateannonces/{id}',[AnnonceController::class,'update']);
Route::delete('/deleteannonces/{id}',[AnnonceController::class,'delete']);
Route::get('/showannonces/{id}',[AnnonceController::class,'show']);
Route::get('/searchannonces/{titre}',[AnnonceController::class,'search']);


Route::get('/voircommentaires',[CommentaireController::class,'index']);
Route::post('/addcommentaires',[CommentaireController::class,'create']);
Route::put('/updatecommentaires/{id}',[CommentaireController::class,'update']);
Route::delete('/deletecommentaires/{id}',[CommentaireController::class,'delete']);
Route::get('/showcommentaires/{id}',[CommentaireController::class,'show']);
