<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
//task útvonalak
Route::get('/api/tasks', [TaskController::class, 'index']);
Route::get('/api/tasks/{id}', [TaskController::class, 'show']);
/* GET  -1  /api/task/1 */
Route::get('/api/tasks/{id}', [TaskController::class,'show']); 
/* POST     /api/task */
Route::post('/api/tasks', [TaskController::class,'store']);
/* PUT      /api/task/1 */
Route::put('/api/tasks/{id}', [TaskController::class,'update']);
/* DELETE       /api/task/1 */
Route::delete('/api/tasks/{id}', [TaskController::class,'destroy']);
//user útvonalak
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);
//view útvonalak
Route::get('/task/list', [TaskController::class, 'listView']);
Route::get('/task/new', [TaskController::class, 'newView']);
/* Task módosítása      /task/edit/1 */
Route::get('/task/edit/{id}', [TaskController::class, 'editView']);
//user
Route::get('/user/list', [UserController::class, 'listView']);
//require __DIR__ . '/auth.php';
