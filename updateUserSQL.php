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
$fname = $_GET['txtFn'];
$lname = $_GET['txtLn'];
$sex = $_GET['selectSex'];
$mail = $_GET['txtEmail'];
$psw = $_GET['txtPsw'];
$bdate = $_GET['txtBdate'];

$sql = "UPDATE usuario SET Nombre = '$fname', Apellido = '$lname', Sexo = '$sex',
 Contrasena = '$psw', email = '$mail', Fecha_Nac = '$bdate'  WHERE ID ='$id'";

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
