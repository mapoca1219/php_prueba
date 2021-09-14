<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex justify-content-center mt-3">Calcular valor de venta de un producto</h1>
    </div>

    <section class="row mt-3">
        <div class="card w-70 m-auto">
            <div class="card-header bg-primary container">
                <h2 class="m-auto">Información del producto</h2>
            </div>

            <div class="card-body w-100">
                <form action="?controller=product&method=save" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label>Codigo del producto</label>
                        <input type="number" name="codigo_producto" class="form-control" placeholder="Ingrese el codigo del producto" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label>Nombre del producto</label>
                        <input type="text" name="nombre_producto" class="form-control" placeholder="Ingrese nombre del producto" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label>Marca del producto</label>
                        <input type="text" name="marca_producto" class="form-control" placeholder="Ingrese marca del producto" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label>Precio de la compra</label>
                        <input type="number" name="precio_compra" class="form-control" placeholder="Ingrese el precio de la compra" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label>Cantidad de la compra</label>
                        <input type="number" name="cantidad_compra" class="form-control" placeholder="Ingrese cantidad de la compra" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['user']->id?>">
                    <div class="form-group">
                        <button class="btn btn-primary">Generar</button>
                    </div>
                </form>    
            </div>
        </div>
    </section>
</main>
