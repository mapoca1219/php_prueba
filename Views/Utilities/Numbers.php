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
                <form action="?controller=utilities&method=save" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label> Valor de compra</label>
                        <input type="number" name="valor" class="form-control" placeholder="valor producto" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label> % utilidad</label>
                        <input type="number" name="utilidad" class="form-control" placeholder="Ingrese el procentaje utilidad" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label> % IVA</label>
                        <input type="number" name="iva" class="form-control" value="19" readonly required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Generar</button>
                    </div>
                    <?php if(isset($valor)){ ?>
                    	<div class="form-group">
	                        <label> Valor venta</label>
	                        <h2><?php echo $valorVenF?></h2>
	                    </div>
	                    <div class="form-group">
	                        <label> Ganancia</label>
	                        <h2><?php echo $ganancia?></h2>
	                    </div>
                    <?php } ?>
                </form>    
            </div>
        </div>
    </section>
</main>
