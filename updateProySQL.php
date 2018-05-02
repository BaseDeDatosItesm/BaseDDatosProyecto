<?php
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 01/05/2018
 * Time: 07:57 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemainv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['txtId'];
$name = $_GET['txtName'];
$date = $_GET['txtDate'];
$desc = $_GET['txtDesc'];
$mngr = $_GET['txtMngr'];


$sql = "UPDATE proyecto SET Nombre = '$name', Fecha_Inicio = '$date', descripcion = '$desc',
 ID_Manager = '$mngr' WHERE ID_Proyecto = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "Registro modificado correctamente";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<form name = "goBack" action = "inicioReal.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>