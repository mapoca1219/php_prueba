<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex justify-content-center mt-3"><?php echo $db?></h1>
    </div>
    <section class="row mt-3">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <form action="?controller=admin&method=newColumns" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label>Cantidad de columnas</label>
                        <input type="number" name="colums" class="form-control" placeholder="Ingrese la cantidad de campos para la tabla" required>
                        <input type="hidden" name="db" value="<?php echo $db?>">
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Generar</button>
                    </div>
                </form>    
            </div>
            <?php if(isset($columns)){ ?>
                <div class="card-body w-100">
                    <form action="Views/Admins/SaveTables.php" method="POST" class="needs-validation" novalidate>
                        <h2>Campos de la tabla</h2>
                        <input type="text" name="nameTable" class="form-control" placeholder="Nombre de la tabla" autofocus>
                        <input type="hidden" name="db" value="<?php echo $db?>">
                        <table class="table table-borderless table-hover my-2">
                            <thead class="thead-dark">
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo de dato</th>
                                <th scope="col">Longitud</th>
                                <th scope="col">Nulo</th>
                            </thead>
                            <tbody>
                                <?php for ($i=1; $i <= $columns; $i++) { ?>
                                    <tr>
                                        <td>
                                            <input type="text" name="name[]" class="form-control">
                                        </td>
                                        <td>
                                            <select name="type[]" class="form-control">
                                                <option value="">Seleccione...</option>
                                                <option value="VARCHAR">Varchar</option>
                                                <option value="INT">int</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="log[]" class="form-control">
                                        </td>
                                        <td>
                                            <select name="null[]" class="form-control">
                                                <option value="">Seleccione...</option>
                                                <option value="NULL">NULL</option>
                                                <option value="NOT NULL">NOT NULL</option>
                                            </select>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <button class="btn btn-primary">Generar</button>
                        </div>
                    </form>    
                </div>
            <?php } ?>
        </div>
    </section>
</main>
