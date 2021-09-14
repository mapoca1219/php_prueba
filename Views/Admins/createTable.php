<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex justify-content-center mt-3">Selecciona la base de datos</h1>
    </div>

    <section class="row mt-3">
        <div class="card w-50 m-auto">
            <div class="card-body w-100">
                <div class="form-group">
                    <table class="table table-borderless table-hover">
                    	<thead class="thead-dark">
                    		<th scope="col">Base de datos</th>
                    	</thead>
                    	<tbody>
                    		<?php foreach ($databases as $database) { ?>
                    			<tr>
                        			<td>
                        				<a href="?controller=admin&method=new&db=<?php echo $database->Database ?>" class="btn btn-warning btn-block"><?php echo $database->Database ?></a>
                        			</td>
                    		    </tr>
                    		<?php } ?>
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
