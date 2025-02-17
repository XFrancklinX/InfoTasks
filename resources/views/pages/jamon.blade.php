@extends('layouts.default')

@section('content')
    <div class="col-xxl-12 col-12 locked">
        <div class="card">
            <div class="card-body">
                <div class="custom-tabs-container w-100">
                    <ul class="nav nav-tabs" id="customTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab-one" data-bs-toggle="tab" href="#one" role="tab"
                                aria-controls="one" aria-selected="true">Inventario</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-two" data-bs-toggle="tab" href="#two" role="tab"
                                aria-controls="two" aria-selected="false">Entradas</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-three" data-bs-toggle="tab" href="#three" role="tab"
                                aria-controls="three" aria-selected="false">Salidas</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="customTabContent">
                        <div class="tab-pane fade show active" id="one" role="tabpanel">
                            <div class="row gutters">
                                <div class="col-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <button class="btn btn-primary col-2 mb-2 rounded newProduct" type="button"
                                                data-bs-toggle="modal" data-bs-target="#newProduct">Nuevo</button>
                                            @include('includes.newProduct')

                                            <div class="table-responsive w-100">
                                                <table class="table table-striped" id="inventoryTable" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Artículo</th>
                                                            <th>Detalle</th>
                                                            <th>Cantidad</th>
                                                            <th>Precio U.</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($filteredRecords as $record)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $record['articulo'] }}</td>
                                                                <td>{{ $record['detalle'] }}</td>
                                                                <td>{{ $record['cantidad_total'] }}</td>
                                                                <td>{{ $record['precio_venta'] }}</td>
                                                                <td>
                                                                    <button class="btn btn-primary rounded inventoryAdd"
                                                                        data-id="{{ $record['id'] }}">Agregar</button>
                                                                    <button class="btn btn-warning rounded inventoryUpdate"
                                                                        data-id="{{ $record['id'] }}">Actualizar</button>
                                                                    <button class="btn btn-success rounded inventorySell"
                                                                        data-id="{{ $record['id'] }}">Vender</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="two" role="tabpanel">
                            <div class="row gutters">
                                <div class="col-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive w-100">
                                                <table class="table table-striped" id="inTable" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Artículo</th>
                                                            <th>Detalle</th>
                                                            <th>Cantidad Total</th>
                                                            <th>Precio</th>
                                                            <th>Fecha</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dataE as $record)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $record['articulo'] }}</td>
                                                                <td>{{ $record['detalle'] }}</td>
                                                                <td>{{ $record['cantidad_entrada'] }}</td>
                                                                <td>{{ $record['precio_compra'] }}</td>
                                                                <td>{{ $record['fecha_entrada'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="three" role="tabpanel">
                            <div class="row gutters">
                                <div class="col-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive w-100">
                                                <table class="table table-striped" id="outTable" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Artículo</th>
                                                            <th>Detalle</th>
                                                            <th>Cantidad Total</th>
                                                            <th>Precio</th>
                                                            <th>Fecha</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dataS as $record)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $record['articulo'] }}</td>
                                                                <td>{{ $record['detalle'] }}</td>
                                                                <td>{{ $record['cantidad_salida'] }}</td>
                                                                <td>{{ $record['precio_venta'] }}</td>
                                                                <td>{{ $record['fecha_salida'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
