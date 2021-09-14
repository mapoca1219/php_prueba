<?php

require 'Models/Admin.php';

/**
 * controlador administrador
 */
class AdminController
{
	private $model;

    public function __construct()
    {
    	$this->model = new Admin;
    }

	public function createDB()
	{
		require 'Views/Layout.php';
		require 'Views/Admins/create.php';
		require 'Views/Scripts.php';
	}

	public function createTables()
	{
		require 'Views/Layout.php';
		$databases = $this->model->getAll();
		require 'Views/Admins/createTable.php';
		require 'Views/Scripts.php';
	}

	public function new()
	{
		if (isset($_REQUEST['db'])) {
			$db = $_REQUEST['db'];
			require 'Views/Layout.php';
			require 'Views/Admins/new.php';
		    require 'Views/Scripts.php';
		}
	}

	public function newColumns()
	{
		if (isset($_POST['colums'])) {
			$columns = $_POST['colums'];
			$db = $_POST['db'];
			require 'Views/Layout.php';
			require 'Views/Admins/new.php';
		    require 'Views/Scripts.php';
		}
	}
}