<?php

require 'Models/Product.php';

require_once 'vendor/autoload.php';

/**
 * controlador de productos
 */
class ProductController
{
	private $model;

	public function __construct()
	{
		$this->model = new Product;
	}

	public function index()
	{
		if (isset($_SESSION['user'])) {
			require 'Views/Layout.php';
			$products = $this->model->getAll();
			require 'Views/Products/list.php';
			require 'views/Scripts.php';
		}
	}

	public function new()
	{
		if (isset($_SESSION['user'])) {
			require 'Views/Layout.php';
			require 'Views/Products/new.php';
			require 'views/Scripts.php';
	    }
	}

	public function save()
	{
		$this->model->newProduct($_REQUEST);
		header('Location: ?controller=product');
	}

	public function edit()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->model->getById($id);
			require 'Views/Layout.php';
			require 'Views/Products/edit.php';
			require 'views/Scripts.php';
		}
	}

	public function update()
	{
		if ($_POST) {
			$this->model->updateProduct($_POST);
			header('Location: ?controller=product');
		}
	}

	public function delete()
	{
     	$this->model->deleteProduct($_REQUEST);
		header('Location: ?controller=product');
	}

	public function import()
	{
		$mpdf = new \Mpdf\Mpdf();
		$products = $this->model->getAll();
		$html = "<!DOCTYPE html>
			<html lang='en'>
			<head>
			  <meta charset='UTF-8'>
			  <title>Reporte productos</title>
			  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
			<style type='text/css'>
			  /*

			RESPONSTABLE 2.0 by jordyvanraaij
			  Designed mobile first!

			If you like this solution, you might also want to check out the 1.0 version:
			  https://gist.github.com/jordyvanraaij/9069194

			*/
			.responstable {
			  margin: 1em 0;
			  width: 100%;
			  overflow: hidden;
			  background: #FFF;
			  color: #024457;
			  border-radius: 10px;
			  border: 1px solid #167F92;
			}
			.responstable tr {
			  border: 1px solid #D9E4E6;
			}
			.responstable tr:nth-child(odd) {
			  background-color: #EAF3F3;
			}
			.responstable th {
			  display: none;
			  border: 1px solid #FFF;
			  background-color: #167F92;
			  color: #FFF;
			  padding: 1em;
			}
			.responstable th:first-child {
			  display: table-cell;
			  text-align: center;
			}
			.responstable th:nth-child(2) {
			  display: table-cell;
			}
			.responstable th:nth-child(2) span {
			  display: none;
			}
			.responstable th:nth-child(2):after {
			  content: attr(data-th);
			}
			@media (min-width: 480px) {
			  .responstable th:nth-child(2) span {
			    display: block;
			  }
			  .responstable th:nth-child(2):after {
			    display: none;
			  }
			}
			.responstable td {
			  display: block;
			  word-wrap: break-word;
			  max-width: 7em;
			}
			.responstable td:first-child {
			  display: table-cell;
			  text-align: center;
			  border-right: 1px solid #D9E4E6;
			}
			@media (min-width: 480px) {
			  .responstable td {
			    border: 1px solid #D9E4E6;
			  }
			}
			.responstable th, .responstable td {
			  text-align: left;
			  margin: .5em 1em;
			}
			@media (min-width: 480px) {
			  .responstable th, .responstable td {
			    display: table-cell;
			    padding: 1em;
			  }
			}

			body {
			  padding: 0 2em;
			  font-family: Arial, sans-serif;
			  color: #024457;
			  background: #f2f2f2;
			}

			h1 {
			  font-family: Verdana;
			  font-weight: normal;
			  color: #024457;
			}
			h1 span {
			  color: #167F92;
			}
			</style>

			</head>
			<body>
			<!-- partial:index.partial.html -->
			<h1>REPORTE DE PRODUCTOS</h1>

			<table class='responstable'>
			  <tr>
			    <th>#</th>
			    <th>CODIGO DEL PRODUCTO</th>
			    <th>NOMBRE DEL PRODUCTO</th>
			    <th>MARCA DEL PRODUCTO</th>
			    <th>PRECIO DE LA COMPRA</th>
			    <th>CANTIDAD DE LA COMPRA</th>
			  </tr>";
		foreach ($products as $product) {
		  	$html .= "<tr>
					    <td>'".$product->id."'</td>
					    <td>'".$product->codigo_producto."'</td>
					    <td>'".$product->nombre_producto."'</td>
					    <td>'".$product->marca_producto."'</td>
					    <td>'".$product->precio_compra."'</td>
					    <td>'".$product->cantidad_compra."'</td>
					  </tr>";
		}
	    $html .= "
				</table>
				<!-- partial -->
				  <script src='https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
				</body>
				</html>
				";
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
}