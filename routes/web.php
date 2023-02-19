<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
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
Route::get('admin/login',[PageController::class,'showLogin']);
Route::post('admin/login',[PageController::class,'Login']);
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware'=>['Admin']], function(){
    Route::get('/',[PageController::class,'showDashboard']);
    Route::get('/logout',[PageController::class,'logout']);
    
});