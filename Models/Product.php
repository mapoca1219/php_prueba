<?php

/**
 * Modelo productos
 */
class Product
{
	private $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new Conexion;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAll()
	{
		try {
			$strSql = "SELECT * FROM producto";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newProduct($data)
	{
		try {
			$this->pdo->insert('producto' , $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
     	try {
     		$strSql = "SELECT * FROM producto WHERE id = :id";
     		$array = ['id' => $id];
     		$query = $this->pdo->select($strSql,$array);
     		return $query;
     	} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function updateProduct($data)
	{
		try {
			$strWhere = 'id='.$data['id'];
			$this->pdo->update('producto' , $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteProduct($data)
	{
		try {
			$strWhere = 'id='.$data['id'];
			$this->pdo->delete('producto' , $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


}