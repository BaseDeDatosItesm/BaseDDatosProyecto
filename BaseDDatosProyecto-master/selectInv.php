<?php
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 30/04/2018
 * Time: 01:25 AM
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

//$ssnLook = $_GET['txtSSN'];

$sql = "SELECT SKU_Articulo, Nombre, qty_actual*Costo FROM articulo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Codigo: " . $row["SKU_Articulo"]. " | Nombre: " . $row["Nombre"]." | Valor total: ".$row["qty_actual*Costo"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<form name = "goBack" action = "inicio.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>