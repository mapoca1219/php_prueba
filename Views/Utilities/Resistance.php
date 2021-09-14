<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex justify-content-center mt-3">Calcular resistencia de cargas</h1>
    </div>

    <section class="row mt-3">
        <div class="card w-70 m-auto">
            <div class="card-header bg-primary container">
                <h2 class="m-auto">Información de las bandas</h2>
            </div>

            <div class="card-body w-100">
                <form action="?controller=utilities&method=saveResistance" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label> Banda 1</label>
                        <select name="banda1" class="form-control">
                          <option value="">Seleccione...</option>
                          <option value="0">Negro</option>
                          <option value="1">Marron</option>
                          <option value="2">Rojo</option>
                          <option value="3">Naranja</option>
                          <option value="4">Amariilo</option>
                          <option value="5">Verde</option>
                          <option value="6">Azul</option>
                          <option value="7">Violeta</option>
                          <option value="8">gris</option>
                          <option value="9">blanco</option>
                        </select>
                        <!-- <input type="number" name="banda1" class="form-control" placeholder="Banda 1" required> -->
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label> Banda 2</label>
                         <select name="banda2" class="form-control">
                            <option value="">Seleccione...</option>
                              <option value="0">Negro</option>
                              <option value="1">Marron</option>
                              <option value="2">Rojo</option>
                              <option value="3">Naranja</option>
                              <option value="4">Amariilo</option>
                              <option value="5">Verde</option>
                              <option value="6">Azul</option>
                              <option value="7">Violeta</option>
                              <option value="8">gris</option>
                              <option value="9">blanco</option>
                        </select>
                        <!-- <input type="number" name="banda2" class="form-control" placeholder="Banda 2" required> -->
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <label> Banda 3</label>
                         <select name="banda3" class="form-control">
                          <option value="">Seleccione...</option>
                          <option value="1">Negro</option>
                          <option value="10">Marron</option>
                          <option value="100">Rojo</option>
                          <option value="1000">Naranja</option>
                          <option value="10000">Amariilo</option>
                          <option value="100000">Verde</option>
                          <option value="1000000">Azul</option>
                          <option value="10000000">Violeta</option>
                          <option value="100000000">gris</option>
                          <option value="1000000000">blanco</option>
                        </select>
                        <!-- <input type="number" name="banda3" class="form-control" placeholder="Banda 3" required> -->
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Generar</button>
                    </div>
                    <?php if(isset($banda1)){ ?>
                    	<div class="form-group">
	                        <label> Resistencia</label>
	                        <h2><?php echo $ohmio.' Ohmios'?></h2>
	                    </div>
                    <?php } ?>
                </form>    
            </div>
        </div>
    </section>
</main>
