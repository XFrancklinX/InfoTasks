<div class="modal fade" id="inventoryUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="scrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <form action="{{route('update.product')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableLabel">Actualizar Producto #{{$product['id']}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="number" id="id" name="id" class="form-control" value="{{$product['id']}}"
                            readonly hidden>

                    <div class="form-group mb-2">
                        <label for="product_name">Producto</label>
                        <input type="text" id="product_name" name="product_name" class="form-control" value="{{$product['articulo']}}"
                            required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="product_description">Descripción</label>
                        <textarea id="product_description" name="product_description" value="{{$product['detalle']}}" class="form-control" required>{{$product['detalle']}}</textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="current_quantity">Cantidad Actual</label>
                        <input type="number" id="current_quantity" name="current_quantity" class="form-control"
                            value="{{$product['cantidad_total']}}" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="current_quantity">Precio Compra</label>
                        <input type="number" id="price_buy" name="price_buy" class="form-control"
                            value="{{$product['precio_compra']}}" step="00.01" min="00.00" max="9999.99" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="current_quantity">Precio Venta</label>
                        <input type="number" id="price_sell" name="price_sell" class="form-control"
                            value="{{$product['precio_venta']}}" step="00.01" min="00.00" max="9999.99" required>
                    </div>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
