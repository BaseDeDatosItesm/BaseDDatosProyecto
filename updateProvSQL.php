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

$id = $_GET['txtCodigo'];
$name = $_GET['txtName'];
$address = $_GET['txtDirec'];
$mail = $_GET['txtEmail'];


$sql = "UPDATE proveedor SET Nombre = '$name', Direccion_Sucursal = '$address', email = '$email' WHERE Codigo ='$id'";

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