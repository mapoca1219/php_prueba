<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de productos</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Productos</h2>
			<a href="?controller=product&method=new" class="btn btn-success">+Agregar</a>
			<a href="?controller=product&method=import" class="btn btn-danger">Exportar archivo</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-success table-borderless table-hover" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Codigo del producto</th>
						<th>nombre del producto</th>
						<th>Marca del producto</th>
						<th>Precio de la compra</th>
						<th>Cantidad de compra</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($products as $product): ?>
						<tr>
							<td><?php echo $product->id?></td>
							<td><?php echo $product->codigo_producto?></td>
							<td><?php echo $product->nombre_producto?></td>
							<td><?php echo $product->marca_producto?></td>
							<td><?php echo $product->precio_compra?></td>
							<td><?php echo $product->cantidad_compra?></td>
							<td>
								<a href="?controller=product&method=edit&id=<?php echo $product->id  ?>" class="btn btn-warning">Editar</a>
								<a href="?controller=product&method=delete&id=<?php echo $product->id  ?>" class="btn btn-danger">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
