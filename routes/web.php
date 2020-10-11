<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\MenuRolController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Seguridad\LoginController;

//use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('seguridad/login', [LoginController::class, 'index'])->name('login');
Route::post('seguridad/login', [LoginController::class, 'login'])->name('login_post');
Route::get('seguridad/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
    //Admin
    Route::get('', [AdminController::class, 'index']);
    //Permisos
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
    Route::get('permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');

    //Menus
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear', [MenuController::class, 'crear'])->name('crear_menu');
    Route::post('menu', [MenuController::class, 'guardar'])->name('guardar_menu');
    Route::post('menu/guardar-orden', [MenuController::class, 'guardarorden'])->name('guardar_orden');
    Route::get('menu/{id}/editar', [MenuController::class, 'editar'])->name('editar_menu');
    Route::put('menu/{id}', [MenuController::class, 'actualizar'])->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', [MenuController::class, 'eliminar'])->name('eliminar_menu');

    //Roles
    Route::get('rol', [RolController::class, 'index'])->name('rol');
    Route::get('rol/crear', [RolController::class, 'crear'])->name('crear_rol');
    Route::post('rol', [RolController::class, 'guardar'])->name('guardar_rol');
    Route::get('rol/{id}/editar', [RolController::class, 'editar'])->name('editar_rol');
    Route::put('rol/{id}', [RolController::class, 'actualizar'])->name('actualizar_rol');
    Route::delete('rol/{id}', [RolController::class, 'eliminar'])->name('eliminar_rol');

    //-Rol-Menu
    Route::get('menu-rol', [MenuRolController::class, 'index'])->name('menu_rol');
    Route::post('menu-rol', [MenuRolController::class, 'guardar'])->name('guardar_menu_rol');
});


