<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssuranceController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\MissionUserController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\ReparerController;
use App\Http\Controllers\NotificationController;
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

Route::get('/', function () {return view('layout.login');});
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth', 'role:Administrateur'])->group(function () {
Route::get('structures', [StructureController::class, 'index']);
Route::get('addstructures', [StructureController::class, 'show']);
Route::post('savestructures', [StructureController::class, 'create']);
Route::get('editstructures/{id}', [StructureController::class, 'edit']);
Route::put('upstructures/{id}', [StructureController::class, 'update']);
Route::get('delstructures/{id}', [StructureController::class, 'destroy']);

Route::get('assurance', [AssuranceController::class,'index']);
Route::get('addassurance/{id}', [AssuranceController::class,'create']);
Route::post('postA', [AssuranceController::class, 'save']);
Route::get('editass/{id}', [AssuranceController::class, 'edit']);
Route::put('updateass/{id}', [AssuranceController::class, 'update']);
Route::get('deleteass/{id}', [AssuranceController::class, 'destroy']);

Route::get('voitures', [VoitureController::class,'index']);
Route::get('addvoitures', [VoitureController::class,'create']);
Route::post('savevoitures', [VoitureController::class,'store']);
Route::get('get/piece/{id}',[VoitureController::class,"piece"]);
Route::get('detailsvoiture/{id}',[VoitureController::class,"details"]);
Route::put('remisevoiture',[VoitureController::class,"upe"]);

Route::get('missions', [MissionController::class, 'index'])->name('missions');
Route::get('addmissions', [MissionController::class,'create']);
Route::post('savemission', [MissionController::class,'store']);
Route::put('up/{id}', [MissionController::class, 'edit'])->name('up');
Route::put('del/{id}', [MissionController::class, 'destroy']);


Route::get('det/{id}', [MissionUserController::class, 'index']);
Route::get('addchauf/{id}', [MissionUserController::class, 'create']);
Route::post('savechauffeurs/{id}', [MissionUserController::class, 'store']);


Route::get('chauffeurs', [ChauffeurController::class, 'index'])->name('chauffeurs');
Route::get('createchauffeurs', [ChauffeurController::class, 'create']);
Route::post('storechauffeurs', [ChauffeurController::class, 'store']);

Route::get('garages', [GarageController::class, 'index'])->name('garages');
Route::get('addgarage', [GarageController::class, 'create']);
Route::post('savegarage', [GarageController::class, 'store']);

Route::get('pieces', [PieceController::class, 'index'])->name('pieces');
Route::get('createpiece', [PieceController::class, 'create']);
Route::post('savepiece', [PieceController::class, 'store']);

Route::get('listereparation', [ReparerController::class, 'index'])->name('listereparation');
Route::get('reparations', [ReparerController::class, 'create']);
Route::post('createreparation', [ReparerController::class, 'store']);

// Route::get('notif', [NotificationController::class, 'index']);

});
Route::get('login', [AuthController::class, 'index']);
Route::post('loginusers', [AuthController::class, 'create']);
Route::get('register', [AuthController::class, 'show']);
Route::post('registerusers', [AuthController::class, 'store']);
Route::get('signout', [AuthController::class, 'destroy']);
