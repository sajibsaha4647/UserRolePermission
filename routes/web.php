<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//admin
Route::get('/admina', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

//admin Role User Route
Route::get('/admina/addRoleUser', [App\Http\Controllers\AdminUserRoleController::class, 'index'])->name('home');
Route::get('/admina/allRoleUser', [App\Http\Controllers\AdminUserRoleController::class, 'store'])->name('home');
Route::post('/admina/CreateRoleUser', [App\Http\Controllers\AdminUserRoleController::class, 'create'])->name('home');
Route::get('/admina/editRoleUser', [App\Http\Controllers\AdminUserRoleController::class, 'edit'])->name('home');
Route::get('/admina/UpdateRoleUser', [App\Http\Controllers\AdminUserRoleController::class, 'update'])->name('home');
Route::get('/admina/DeleteRoleUser', [App\Http\Controllers\AdminUserRoleController::class, 'destroy'])->name('home');

//admin User Route
Route::get('/admina/addUser', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::get('/admina/allUser', [App\Http\Controllers\UserController::class, 'store'])->name('home');
Route::post('/admina/CreateUser', [App\Http\Controllers\UserController::class, 'create'])->name('home');
Route::get('/admina/editUser', [App\Http\Controllers\UserController::class, 'edit'])->name('home');
Route::get('/admina/UpdateUser', [App\Http\Controllers\UserController::class, 'update'])->name('home');
Route::get('/admina/DeleteUser', [App\Http\Controllers\UserController::class, 'destroy'])->name('home');



//admin Group Name Route
Route::get('/admina/addGroupName', [App\Http\Controllers\GroupNameController::class, 'index'])->name('home');
Route::get('/admina/allGroupName', [App\Http\Controllers\GroupNameController::class, 'store'])->name('home');
Route::post('/admina/CreateGroupName', [App\Http\Controllers\GroupNameController::class, 'create'])->name('home');
Route::get('/admina/editGroupName', [App\Http\Controllers\GroupNameController::class, 'edit'])->name('home');
Route::get('/admina/UpdateGroupName', [App\Http\Controllers\GroupNameController::class, 'update'])->name('home');
Route::get('/admina/DeleteGroupName', [App\Http\Controllers\GroupNameController::class, 'destroy'])->name('home');



//admin Permission User Route
Route::get('/admina/addPermissionUser', [App\Http\Controllers\AdminPermissionController::class, 'index'])->name('home');
Route::get('/admina/allPermissionUser', [App\Http\Controllers\AdminPermissionController::class, 'store'])->name('home');
Route::post('/admina/CreatePermission', [App\Http\Controllers\AdminPermissionController::class, 'create'])->name('home');
Route::get('/admina/editPermissionUser', [App\Http\Controllers\AdminPermissionController::class, 'edit'])->name('home');
Route::get('/admina/UpdatePermissionUser', [App\Http\Controllers\AdminPermissionController::class, 'update'])->name('home');
Route::get('/admina/DeletePermissionUser', [App\Http\Controllers\AdminPermissionController::class, 'destroy'])->name('home');


// //Front user Route
// Route::get('/admina/addLocalUser', [App\Http\Controllers\LocalUserController::class, 'index'])->name('home');
// Route::get('/admina/allLocalUser', [App\Http\Controllers\LocalUserController::class, 'store'])->name('home');
// Route::post('/admina/CreateLocalUser', [App\Http\Controllers\LocalUserController::class, 'create'])->name('home');
// Route::get('/admina/editLocalUser', [App\Http\Controllers\LocalUserController::class, 'edit'])->name('home');
// Route::get('/admina/UpdateLocalUser', [App\Http\Controllers\LocalUserController::class, 'update'])->name('home');
// Route::get('/admina/DeleteLocalUser', [App\Http\Controllers\LocalUserController::class, 'destroy'])->name('home');

// //Front Role user Route
// Route::get('/admina/addRoleLocalUser', [App\Http\Controllers\LocalUserRoleController::class, 'index'])->name('home');
// Route::get('/admina/allRoleLocalUser', [App\Http\Controllers\LocalUserRoleController::class, 'store'])->name('home');
// Route::post('/admina/CreateRoleLocalUser', [App\Http\Controllers\LocalUserRoleController::class, 'create'])->name('home');
// Route::get('/admina/editRoleLocalUser', [App\Http\Controllers\LocalUserRoleController::class, 'edit'])->name('home');
// Route::get('/admina/UpdateRoleLocalUser', [App\Http\Controllers\LocalUserRoleController::class, 'update'])->name('home');
// Route::get('/admina/DeleteRoleLocalUser', [App\Http\Controllers\LocalUserRoleController::class, 'destroy'])->name('home');

// //Front Permission user route
// Route::get('/admina/addPermissionLocalUser', [App\Http\Controllers\LocalUserPermissionController::class, 'index'])->name('home');
// Route::get('/admina/allPermissionLocalUser', [App\Http\Controllers\LocalUserPermissionController::class, 'store'])->name('home');
// Route::get('/admina/CreateUser', [App\Http\Controllers\UserController::class, 'create'])->name('home');
// Route::get('/admina/editPermissionLocalUser', [App\Http\Controllers\LocalUserPermissionController::class, 'edit'])->name('home');
// Route::get('/admina/UpdatePermissionLocalUser', [App\Http\Controllers\LocalUserPermissionController::class, 'update'])->name('home');
// Route::get('/admina/DeletePermissionLocalUser', [App\Http\Controllers\LocalUserPermissionController::class, 'destroy'])->name('home');
