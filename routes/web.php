<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RolController;
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

Route::get('/', [InicioController::class, 'index']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
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
    Route::get('menu/{id}/editar', [RolController::class, 'editar'])->name('editar_rol');
    Route::put('menu/{id}', [RolController::class, 'actualizar'])->name('actualizar_rol');
    Route::delete('menu/{id}', [RolController::class, 'eliminar'])->name('eliminar_rol');
});


