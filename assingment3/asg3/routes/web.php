<?php

use App\Http\Controllers\CharacterLevelUpItemController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Material/Character_Level_Up_Items_Index', [CharacterLevelUpItemController::class, 'index'])->name('Material_Character_Index');
Route::delete('/Material/Character_Level_Up_Items_Delete/{name}', [CharacterLevelUpItemController::class, 'deleteHandler'])->name('Material_Character_Delete');
Route::get('/Material/Character_Leve_Up_Item_Insert', [CharacterLevelUpItemController::class, 'insertView'])->name('Material_Character_Insert');
Route::post('/Material/Character_Level_Up_Item_insert', [CharacterLevelUpItemController::class, 'insertHandler'])->name('Material_Character_InsertHandler');
