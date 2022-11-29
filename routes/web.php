<?php

use App\Http\Controllers\DashboardbackController;
use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\front\DetailTalentController;
use App\Http\Controllers\Front\KategoriFrontController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\ListTalentController as FrontListTalentController;
use App\Http\Controllers\Front\TagFrontController;
use App\Http\Controllers\Front\TestimonyController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriStageController;
use App\Http\Controllers\Tagcontroller;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\ListTalentController;
use App\Models\Domisili;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
Route::get('/', [LandingController::class, 'index']);

Route::resource('dashboardback', DashboardbackController::class);
Route::resource('talent', TalentController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('kategoristage', KategoriStageController::class);
Route::resource('domisili', DomisiliController::class);
Route::resource('tag', Tagcontroller::class);
Route::resource('landing', LandingController::class);
Route::resource('listtalent', FrontListTalentController::class);
Route::resource('testimony', TestimonyController::class);
Route::resource('detailtalent', DetailTalentController::class);
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);


Route::prefix('accome-admin-u425-ars')->group(function () {
    Auth::routes();
});
// Auth::routes();

Route::get('/dashboardback', [App\Http\Controllers\DashboardbackController::class, 'index'])->name('dashboardback');

Route::get('tags-talent/{id}', [TagFrontController::class, 'show_tag']);
Route::get('kategori-talent/{slug}', [KategoriFrontController::class, 'show_kategori']);
Route::get('detail-talent/{id}', [DetailTalentController::class, 'show_talent']);
Route::PUT('talent/update/{id}', [TalentController::class, 'update']);