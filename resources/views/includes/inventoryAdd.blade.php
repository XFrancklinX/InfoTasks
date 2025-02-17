<div class="modal fade" id="inventoryAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="scrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <form action="{{ route('store.product') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableLabel">Adicionar Cantidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="product_name">Producto</label>
                        <input type="text" id="product_name" class="form-control" value="{{ $product['articulo'] }}"
                            disabled>
                    </div>
                    <div class="form-group mb-2">
                        <label for="product_description">Descripción</label>
                        <textarea id="product_description" class="form-control" disabled>{{ $product['detalle'] }}</textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="current_quantity">Cantidad Actual</label>
                        <input type="number" id="current_quantity" class="form-control"
                            value="{{ $product['cantidad_total'] }}" disabled>
                    </div>
                    <div class="form-group mb-2">
                        <label for="current_quantity">Precio</label>
                        <input type="number" id="current_quantity" class="form-control"
                            value="{{ $product['precio_venta'] }}" disabled>
                    </div>
                    <div class="form-group mb-2">
                        <label for="add_quantity">Cantidad a Adicionar</label>
                        <input type="number" id="add_quantity" name="add_quantity" class="form-control" min="1" required>
                    </div>
                    <input type="hidden" id="product_id" name="product_id" value="{{ $product['id'] }}" required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
            </div>
        </form>
    </div>
</div>
