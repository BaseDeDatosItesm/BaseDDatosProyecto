<?php
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 01/05/2018
 * Time: 04:17 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemainv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id= $_GET['txtId'];

// sql to delete a record
$sql = "DELETE FROM usuario WHERE ID_Proyecto = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<form name = "goBack" action = "inicioReal.php">

    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>