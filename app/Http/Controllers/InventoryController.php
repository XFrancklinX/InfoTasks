<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use League\Csv\Reader;
use League\Csv\Writer;

class InventoryController extends Controller
{
    public function login(Request $request)
    {}

    public function newProduct(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'product_name' => 'required|string',
            'product_description' => 'required|string',
            'current_quantity' => 'required|integer|min:1',
            'price_buy' => 'required|numeric|min:0.01',
            'price_sell' => 'required|numeric|min:0.01',
        ]);

        // Datos recibidos del formulario
        $productName = $request->input('product_name');
        $productDescription = $request->input('product_description');
        $currentQuantity = $request->input('current_quantity');
        $priceBuy = $request->input('price_buy');
        $priceSell = $request->input('price_sell');

        // Obtener el ID del producto para inventario y entradas
        $productId = $this->getNextProductId(); // Función para obtener un ID único

        // Agregar el nuevo producto a entradas.csv (registrar la entrada de inventario)
        $entradaCsv = Writer::createFromPath(storage_path('entradas.csv'), 'a+'); // Abrir en modo append
        $newEntrada = [
            'id' => $productId,
            'cantidad_entrada' => $currentQuantity,
            'precio_compra' => $priceBuy,
            'fecha_entrada' => now()->toDateString(),
            'id_inventario' => $productId,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Escribir la nueva entrada al archivo entradas.csv
        $entradaCsv->insertOne($newEntrada);

        // Ahora agregar el producto al inventario (inventario.csv)
        $inventarioCsv = Writer::createFromPath(storage_path('inventario.csv'), 'a+'); // Abrir en modo append
        $newProduct = [
            'id' => $productId,
            'articulo' => $productName,
            'detalle' => $productDescription,
            'cantidad_total' => $currentQuantity,
            'precio_venta' => $priceSell,
            'fecha_venta' => now()->toDateString(),
            'tipo' => 'E',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Escribir el nuevo producto al archivo inventario.csv
        $inventarioCsv->insertOne($newProduct);

        return redirect()->route('welcome');
    }

    public function storeProduct(Request $request)
    {
        //dd($request->all());

        // Obtener los datos enviados desde el formulario
        $productId = $request->input('product_id');
        $addQuantity = $request->input('add_quantity');

        // Leer el archivo de inventario
        $csv = Reader::createFromPath(storage_path('inventario.csv'), 'r+');
        $csv->setHeaderOffset(0);
        $records = iterator_to_array($csv->getRecords());
        $updatedRecords = [];
        $product = null;

        // Actualizar la cantidad del producto en inventario
        foreach ($records as $record) {
            if ($record['id'] == $productId) {
                $product = $record;
                $record['cantidad_total'] += $addQuantity; // Actualizar la cantidad
            }
            $updatedRecords[] = $record;
        }

        // Volver a escribir el archivo inventario.csv
        $csv = Writer::createFromPath(storage_path('inventario.csv'), 'w+');
        $csv->insertOne(array_keys($updatedRecords[0])); // Escribir la cabecera
        $csv->insertAll($updatedRecords); // Escribir todos los registros

        // Ahora agregar solo la nueva entrada en entradas.csv sin sobrescribir los registros existentes
        // Abre el archivo de entradas.csv en modo append ('a+')
        $entradaCsv = Writer::createFromPath(storage_path('entradas.csv'), 'a+'); // 'a+' permite añadir al final
        $newEntrada = [
            'id' => $this->getNextEntradaId(), // Generamos un ID único para la nueva entrada
            'cantidad_entrada' => $addQuantity,
            'precio_compra' => $product['precio_venta'], // Usamos el precio del producto
            'fecha_entrada' => now()->toDateString(),
            'id_inventario' => $productId,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Escribimos solo la nueva entrada al final del archivo
        $entradaCsv->insertOne($newEntrada);


        return redirect()->route('welcome');
    }

    public function updateProduct(Request $request)
    {
        // Datos del formulario
        $id = $request->input('id');
        $productName = $request->input('product_name');
        $productDescription = $request->input('product_description');
        $currentQuantity = $request->input('current_quantity');
        $priceBuy = $request->input('price_buy');
        $priceSell = $request->input('price_sell');

        // Leer el archivo de entradas.csv
        $entriesCsv = Reader::createFromPath(storage_path('entradas.csv'), 'r');
        $entriesCsv->setHeaderOffset(0); // La primera fila es el encabezado
        $entriesRecords = iterator_to_array($entriesCsv->getRecords());

        // Buscar la entrada relacionada con el producto en entradas.csv
        foreach ($entriesRecords as $key => $entry) {
            if ($entry['id_inventario'] == $id) {
                // Actualizamos la entrada (por ejemplo, el precio de compra)
                $entriesRecords[$key]['precio_compra'] = $priceBuy;
                break;
            }
        }

        // Escribir los datos actualizados nuevamente en entradas.csv
        $entriesWriter = Writer::createFromPath(storage_path('entradas.csv'), 'w+');
        $entriesWriter->insertOne($entriesCsv->getHeader()); // Reescribir los encabezados
        $entriesWriter->insertAll($entriesRecords); // Escribir todos los registros actualizados

        // Leer el archivo de inventario.csv
        $inventoryCsv = Reader::createFromPath(storage_path('inventario.csv'), 'r');
        $inventoryCsv->setHeaderOffset(0); // La primera fila es el encabezado
        $inventoryRecords = iterator_to_array($inventoryCsv->getRecords());

        // Buscar el producto en inventario.csv
        foreach ($inventoryRecords as $key => $record) {
            if ($record['id'] == $id) {
                // Actualizamos los datos del producto en inventario (nombre, descripción, cantidad, precio venta)
                $inventoryRecords[$key]['articulo'] = $productName;
                $inventoryRecords[$key]['detalle'] = $productDescription;
                $inventoryRecords[$key]['cantidad_total'] = $currentQuantity;
                $inventoryRecords[$key]['precio_venta'] = $priceSell;
                break;
            }
        }

        // Escribir los datos actualizados nuevamente en inventario.csv
        $inventoryWriter = Writer::createFromPath(storage_path('inventario.csv'), 'w+');
        $inventoryWriter->insertOne($inventoryCsv->getHeader()); // Reescribir los encabezados
        $inventoryWriter->insertAll($inventoryRecords); // Escribir todos los registros actualizados

        return redirect()->route('welcome');
    }

    public function sellProduct(Request $request)
    {
        //dd($request->all());

        // Obtener los datos enviados desde el formulario de venta
        $productId = $request->input('product_id');
        $soldQuantity = $request->input('sell_quantity');
        $salePrice = $request->input('precio_venta');

        // Leer el archivo de inventario
        $csv = Reader::createFromPath(storage_path('inventario.csv'), 'r+');
        $csv->setHeaderOffset(0);
        $records = iterator_to_array($csv->getRecords());
        $updatedRecords = [];
        $product = null;

        // Buscar el producto en el inventario y actualizar su cantidad
        foreach ($records as $record) {
            if ($record['id'] == $productId) {
                $product = $record;

                // Comprobar que la cantidad en inventario es suficiente para la venta
                if ($record['cantidad_total'] < $soldQuantity) {
                    return redirect()->back()->with('error', 'No hay suficiente cantidad en inventario para la venta.');
                } else {
                    // Ahora registrar la venta en salidas.csv sin sobrescribir los registros existentes
                    $salidaCsv = Writer::createFromPath(storage_path('salidas.csv'), 'a+'); // 'a+' permite añadir al final
                    $newSalida = [
                        'id' => $this->getNextSalidaId(), // Generamos un ID único para la nueva salida
                        'cantidad_vendida' => $soldQuantity,
                        'precio_venta' => $salePrice,
                        'fecha_salida' => now()->toDateString(),
                        'id_inventario' => $productId,
                        'created_at' => date('Y-m-d H:i:s'),
                    ];

                    // Escribimos solo la nueva venta en el archivo salidas.csv
                    $salidaCsv->insertOne($newSalida);
                }

                // Actualizar la cantidad en inventario (restar la cantidad vendida)
                $record['cantidad_total'] -= $soldQuantity;
            }
            $updatedRecords[] = $record;
        }

        // Volver a escribir el archivo inventario.csv con los nuevos datos
        $csv = Writer::createFromPath(storage_path('inventario.csv'), 'w+');
        $csv->insertOne(array_keys($updatedRecords[0])); // Escribir la cabecera
        $csv->insertAll($updatedRecords); // Escribir todos los registros actualizados

        return redirect()->route('welcome');
    }

    public function inventoryAdd(Request $request)
    {
        $id = $request->input('id');

        $csv = Reader::createFromPath(storage_path('inventario.csv'), 'r');
        $csv->setHeaderOffset(0);
        $records = iterator_to_array($csv->getRecords());
        $product = null;
        foreach ($records as $record) {
            if ($record['id'] == $id) {
                $product = $record;
                break;
            }
        }

        return response()->json([view('includes.inventoryAdd', compact('product'))->render()]);
    }

    public function inventorySell(Request $request)
    {
        $id = $request->input('id');

        $csv = Reader::createFromPath(storage_path('inventario.csv'), 'r');
        $csv->setHeaderOffset(0);
        $records = iterator_to_array($csv->getRecords());
        $product = null;
        foreach ($records as $record) {
            if ($record['id'] == $id) {
                $product = $record;
                break;
            }
        }

        return response()->json([view('includes.inventorySell', compact('product'))->render()]);
    }

    public function inventoryUpdate(Request $request)
    {
        $id = $request->input('id'); // Obtener el id del producto que quieres actualizar

        // Leer el archivo de inventario.csv
        $inventoryCsv = Reader::createFromPath(storage_path('inventario.csv'), 'r');
        $inventoryCsv->setHeaderOffset(0); // La primera fila es el encabezado
        $inventoryRecords = iterator_to_array($inventoryCsv->getRecords());

        // Leer el archivo de entradas.csv
        $entriesCsv = Reader::createFromPath(storage_path('entradas.csv'), 'r');
        $entriesCsv->setHeaderOffset(0); // La primera fila es el encabezado
        $entriesRecords = iterator_to_array($entriesCsv->getRecords());

        // Buscar el producto en inventario
        $product = null;
        foreach ($inventoryRecords as $record) {
            if ($record['id'] == $id) {
                $product = $record;
                break;
            }
        }

        // Buscar el precio de compra en las entradas para el mismo producto
        $purchasePrice = null;
        foreach ($entriesRecords as $entry) {
            if ($entry['id_inventario'] == $id) {
                $purchasePrice = $entry['precio_compra']; // Obtener el precio de compra más reciente
                break;
            }
        }

        // Si se encuentra el producto y el precio de compra, lo combinamos
        if ($product && $purchasePrice) {
            $product['precio_compra'] = $purchasePrice; // Añadir el precio de compra al producto
        }

        return response()->json([view('includes.updateProduct', compact('product'))->render()]);
    }

    private function getNextProductId()
    {
        // Leemos el archivo de inventario para determinar el siguiente ID disponible
        $inventarioCsv = Reader::createFromPath(storage_path('inventario.csv'), 'r');
        $inventarioCsv->setHeaderOffset(0);
        $records = iterator_to_array($inventarioCsv->getRecords());

        // Si no hay registros, el ID inicial será 1
        if (count($records) == 0) {
            return 1;
        }

        // Obtener el ID más alto y sumarle 1
        $maxId = max(array_column($records, 'id'));
        return $maxId + 1;
    }

    private function getNextEntradaId()
    {
        // Leemos el archivo de entradas para determinar el siguiente ID disponible
        $entradaCsv = Reader::createFromPath(storage_path('entradas.csv'), 'r');
        $entradaCsv->setHeaderOffset(0);
        $records = iterator_to_array($entradaCsv->getRecords());

        // Si no hay registros, el ID inicial será 1
        if (count($records) == 0) {
            return 1;
        }

        // Obtener el ID más alto y sumarle 1
        $maxId = max(array_column($records, 'id'));
        return $maxId + 1;
    }

    private function getNextSalidaId()
    {
        // Leemos el archivo de salidas para determinar el siguiente ID disponible
        $salidaCsv = Reader::createFromPath(storage_path('salidas.csv'), 'r');
        $salidaCsv->setHeaderOffset(0);
        $records = iterator_to_array($salidaCsv->getRecords());

        // Si no hay registros, el ID inicial será 1
        if (count($records) == 0) {
            return 1;
        }

        // Obtener el ID más alto y sumarle 1
        $maxId = max(array_column($records, 'id'));
        return $maxId + 1;
    }
}
