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

$id = $_GET['txtSKU'];
$name = $_GET['txtName'];
$desc = $_GET['txtDesc'];
$tipo = $_GET['txtTipoMed'];
$cost = $_GET['txtCost'];
$max = $_GET['numCntMax'];
$min = $_GET['numCntMin'];
$pr= $_GET['numPR'];
$cat = $_GET['selectCat'];

$sql = "UPDATE articulo SET Costo = '$cost', descripcion  = '$desc', Tipo_Medicion = '$tipo',Nombre = '$name', Cnt_max = '$max', Cnt_min = '$min', Punt_Reorden = '$pr', categoria = '$cat' WHERE SKU_Articulo ='$id'";

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