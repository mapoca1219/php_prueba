<?php
//DB details
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'andes_electronica';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}

//get records from database
$query = $db->query("SELECT * FROM producto ORDER BY id DESC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "productos_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('id', 'codigo_producto', 'nombre_producto', 'marca_producto', 'precio_compra', 'cantidad_compra');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $lineData = array($row['id'], $row['codigo_producto'], $row['nombre_producto'], $row['marca_producto'], $row['precio_compra']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;