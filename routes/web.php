<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SolutionsController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use League\Csv\Reader;
use League\Csv\Writer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('pages.index');
})->name('welcome');

Route::get('jamon', function () {
    $csv = Reader::createFromPath(storage_path('inventario.csv'), 'r');
    $csvE = Reader::createFromPath(storage_path('entradas.csv'), 'r');
    $csvS = Reader::createFromPath(storage_path('salidas.csv'), 'r');
    $csv->setHeaderOffset(0);
    $csvE->setHeaderOffset(0);
    $csvS->setHeaderOffset(0);

    $records = $csv->getRecords();
    $entradas = $csvE->getRecords();
    $salidas = $csvS->getRecords();

    $filteredRecords = [];
    $filteredRecordsE = [];
    $filteredRecordsS = [];

    foreach ($records as $record) {
        if ($record['tipo'] === 'E') {
            $filteredRecords[] = $record;
        }
    }

    $inventarios = $csv->getRecords();
    $inventariosData = [];

    foreach ($inventarios as $inventario) {
        $inventariosData[$inventario['id']] = $inventario;
    }

    $dataE = [];
    foreach ($entradas as $entrada) {
        if (isset($inventariosData[$entrada['id_inventario']])) {
            $inventario = $inventariosData[$entrada['id_inventario']];
            // Combinar datos de entrada con inventario
            $dataE[] = [
                'id' => $entrada['id'],
                'cantidad_entrada' => $entrada['cantidad_entrada'],
                'precio_compra' => $entrada['precio_compra'],
                'fecha_entrada' => $entrada['fecha_entrada'],
                'id_inventario' => $entrada['id_inventario'],
                'created_at' => $entrada['created_at'],
                'articulo' => $inventario['articulo'],
                'detalle' => $inventario['detalle'],
            ];
        }
    }

    $dataS = [];
    foreach ($salidas as $salida) {
        if (isset($inventariosData[$salida['id_inventario']])) {
            $inventario = $inventariosData[$salida['id_inventario']];
            // Combinar datos de entrada con inventario
            $dataS[] = [
                'id' => $salida['id'],
                'cantidad_salida' => $salida['cantidad_salida'],
                'precio_venta' => $salida['precio_venta'],
                'fecha_salida' => $salida['fecha_salida'],
                'id_inventario' => $salida['id_inventario'],
                'created_at' => $salida['created_at'],
                'articulo' => $inventario['articulo'],
                'detalle' => $inventario['detalle'],
            ];
        }
    }

    return view('pages.jamon', compact('filteredRecords', 'dataE', 'dataS'));
})->name('jamon');

Route::post('newProduct', [InventoryController::class, 'newProduct'])->name('new.product');
Route::post('updateProduct', [InventoryController::class, 'updateProduct'])->name('update.product');
Route::get('inventoryAdd', [InventoryController::class, 'inventoryAdd'])->name('inventory.add');
Route::get('inventorySell', [InventoryController::class, 'inventorySell'])->name('inventory.sell');
Route::get('inventoryUpdate', [InventoryController::class, 'inventoryUpdate'])->name('inventory.update');
Route::post('storeProduct', [InventoryController::class, 'storeProduct'])->name('store.product');
Route::post('sellProduct', [InventoryController::class, 'sellProduct'])->name('sell.product');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('job_index', 'pages.works.job.index')->name('job.index');
Route::view('service_index', 'pages.works.service.index')->name('service.index');

/* MODALS */
Route::get('job_modal_data', [DataController::class, 'job_modal_data'])->name('job.modal.data');
