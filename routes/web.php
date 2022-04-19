<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ContactController;
use League\CommonMark\Extension\Footnote\Parser\FootnoteParser;

// Route::get('/', [FoodController::class,"index"]);
Route::get('/', [FoodController::class,"index"])->name("acceuil");

// Route::get('/detail/{id}', [FoodController::class,"detail"]);
Route::get('detail/{id}', [FoodController::class,"detail"])->name("detail");

/* Affichage du formulaire contact
            URL affichée                                         ce qu'on appelle */
Route::get('contactez-nous', [ContactController::class,"index"])->name("contact");

// réception des données du formulaire en POST
Route::post('contactez-nous', [ContactController::class,"save"])->name("contact");





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

// Route::get('/test', function() {
//     return view('acceuil');
// });