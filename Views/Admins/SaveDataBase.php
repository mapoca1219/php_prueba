<?php

if (isset($_POST['database'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
	    die("Fallo de Conexión: " . $conn->connect_error);
	} 
	
	$db = $_POST['database'];
	$sql = "CREATE DATABASE $db";
	if ($conn->query($sql) === TRUE) {
	    echo '<script>
	    window.location = "../../?controller=home";
	    </script>';
	} else {
	    echo "Error e creando la DB";
	}
	$conn->close();
}