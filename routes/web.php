<?php

use App\Http\Controllers\ambienteController;
use App\Http\Controllers\equiposController;
use Illuminate\Controllers\ControlController;
use Illuminate\Support\Facades\Route;
use app\http\Controllers\HomeController;
use App\Http\Controllers\perfilController;
use App\Http\Controllers\registrosController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home',                        [App\Http\Controllers\HomeController::class, 'index'])           ->name('home');

Route::get('equipos',                      [equiposController::class, 'index'    ])                         ->name('equipos');
Route::get('equipos/create',               [equiposController::class, 'create'   ])                         ->name('equipos.create');
Route::post('equipos',                     [equiposController::class, 'store'    ])                         ->name('equipos.store');
Route::get('equipos/calor',                [equiposController::class, 'calor'    ])                         ->name('equipos.calor');
Route::get('equipos/alerta',               [equiposController::class, 'alerta'   ])->middleware('can:admin')->name('equipos.alerta'); 
Route::get('equipos/{equipos}/edit',       [equiposController::class, 'edit'     ])                         ->name('equipos.edit');
Route::get('equipos/{equipos}/edit2',      [equiposController::class, 'edit2'    ])                         ->name('equipos.edit2');
Route::put('equipos/{equipos}',            [equiposController::class, 'update'   ])                         ->name('equipos.update');
Route::delete('equipos/{equipos}',         [equiposController::class, 'destroy'  ])                         ->name('equipos.destroy');

//Route::put('equipos/{equipos}',            [equipos2Controller::class, 'update2'  ])                         ->name('equipos.update2');


Route::get('perfil/index',                 [perfilController::class, 'index'     ])->middleware('can:admin')->name('perfil.index');
Route::get('perfil/create',                [perfilController::class, 'create'    ])->middleware('can:admin')->name('perfil.create');
Route::post('perfil/store',                [perfilController::class, 'store'     ])->middleware('can:admin')->name('perfil.store');
Route::get('perfil/{users}/edit',          [perfilController::class, 'edit'      ])->middleware('can:admin')->name('perfil.edit');
Route::delete('delete/{id}',               [perfilController::class, 'delete'    ])->middleware('can:admin')->name('perfil.delete');
Route::get('/editform/{user}',             [perfilController::class, 'editform'  ])->middleware('can:admin')->name('perfil.editform');
Route::put('/edit/{user}',                 [perfilController::class,  'edit'     ])->middleware('can:admin')->name('perfil.edit');


Route::get('equipos/reporte',              [registrosController::class, 'reporte'])                         ->name('equipos.reporte');
Route::post('equipos/reporte',             [registrosController::class, 'store2' ])                         ->name('equipos.store2');


/*AMBIENTE*/

Route::get('ambiente/cocina',              [ambienteController::class, 'cocina'])                           ->name('cocina');
Route::get('ambiente/bio',                 [ambienteController::class, 'bio'])                              ->name('bio');
Route::get('ambiente/cafe',                [ambienteController::class, 'cafe'])                             ->name('cafe');
Route::get('ambiente/micro',               [ambienteController::class, 'micro'])                            ->name('micro');
Route::get('ambiente/quimica',             [ambienteController::class, 'quimica'])                          ->name('quimica');
Route::get('ambiente/restaurante',         [ambienteController::class, 'restaurante'])                      ->name('restaurante');
Route::get('ambiente/fruver',              [ambienteController::class, 'fruver'])                           ->name('fruver');
Route::get('ambiente/lacteos',             [ambienteController::class, 'lacteos'])                          ->name('lacteos');
Route::get('ambiente/panificacion',        [ambienteController::class, 'panificacion'])                     ->name('pani');
Route::get('ambiente/produccion',          [ambienteController::class, 'produccion'])                       ->name('produccion');
Route::get('ambiente/carnicos',            [ambienteController::class, 'carnicos'])                         ->name('carnicos');








