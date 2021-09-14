<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex justify-content-center mt-3">Crear nueva base de datos</h1>
    </div>

    <section class="row mt-3">
        <div class="card w-70 m-auto">
            <div class="card-header bg-primary container">
                <h2 class="m-auto">Información de la base de datos</h2>
            </div>

            <div class="card-body w-100">
                <form action="Views/Admins/SaveDataBase.php" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label>Nombre de la base de datos</label>
                        <input type="text" name="database" class="form-control" placeholder="Ingrese el nombre de la base de datos" required>
                        <div class="invalid-feedback">Por favor no dejar campos vacios.</div>
                        <div class="valid-feedback">Campo validado correctamente.</div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Generar</button>
                    </div>
                </form>    
            </div>
        </div>
    </section>
</main>
