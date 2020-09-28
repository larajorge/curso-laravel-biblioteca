<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\Admin\MenuController;
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
//Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');



/*RUTAS DE PERMISO*/
/*Route::prefix('permiso')->group(function () {
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
});*/

/*Route::group([ 'as'=>'permiso.', 'prefix'=>'permiso', 'namespase' =>'Admin'], function(){
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
});*/
//Route::get('admin/permiso', [Admin\PermisoController::class, 'index'])->name('permiso');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //Permisos
    Route::get('permiso', [PermisoController::class, 'index'])->name('permiso');
    Route::get('permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');

    //Menus
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::get('menu/crear', [MenuController::class, 'crear'])->name('crear_menu');
    Route::post('menu', [MenuController::class, 'guardar'])->name('guardar_menu');

});
/*
Route::group([ 'as'=>'author.', 'prefix'=>'author', 'middleware' => ['auth','author']], function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
*/

 //Route::get('/permiso', [Admin\PermisoController::class, 'index'])->name('permiso');
 //Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
 //Route::get('permiso/crear', [Admin\PermisoController::class, 'crear'])->name('crear_permiso');
 //Route::post('permiso', 'PermisoController@guardar')->name('guardar_permiso');
// Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
 //Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
 //Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar_permiso');

