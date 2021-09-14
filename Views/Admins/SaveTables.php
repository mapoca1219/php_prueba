<?php

if (isset($_POST['db'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
    $db = $_POST['db'];
	
	$conn = new mysqli($servername, $username, $password, $db);
	if ($conn->connect_error) {
	    die("Fallo de Conexión: " . $conn->connect_error);
	}
    
    $table = $_POST['nameTable'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$null = $_POST['null'];
	$log = $_POST['log'];
	$f = null;

	$f = "CREATE TABLE ".$table."("; 
	while (true) {
		
		$item1 = current($name);
		$item2 = current($type);
		$item3 = current($null);
		$item4 = current($log);

		$na = (($item1 !== false) ? $item1 : "");
		$ty = (($item2 !== false) ? $item2 : "");
		$nu = (($item3 !== false) ? $item3 : "");
		$lg = (($item4 !== false) ? $item4 : "");

		$it = [
        	'name' => $na,
        	'type' => $ty,
        	'n' => $nu,
        	'log' => $lg
		];

		//var_dump($it);
		$f .= $it['name']." ".$it['type']." (".$it['log'].") ".$it['n'].",";

		//implode(",", $fieldNames);

		$item1 = next($name);
		$item2 = next($type);
		$item3 = next($null);
		$item4 = next($log);

		if ($item1 === false && $item2 === false && $item3 === false && $item4 === false)break;
	}
	$f = substr($f, 0, -1);
	$f .= ")";
    //echo "'".$f."'";

	$sql = $f;
	if ($conn->query($sql) === TRUE) {
	    echo '<script>
	    window.location = "../../?controller=home";
	    </script>';
	} else {
	    echo "Error creando la tabla: ".$conn->error;
	}
	$conn->close();
}