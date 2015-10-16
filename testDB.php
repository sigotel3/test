<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asphutest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$param = $_GET['parametro'];
$varInspeccion = (int)$param;
$sql = "INSERT INTO demo_zoho (inspeccion, fecha, tarea)
VALUES ($varInspeccion, '2015-10-30', 'rec')";

echo "</br>";
echo $varInspeccion;
echo "</br>";
echo base64_encode ( "perin20151016" );

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>