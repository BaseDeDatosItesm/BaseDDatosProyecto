<?php
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 27/04/2018
 * Time: 08:39 AM
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

$date= $_GET['selectDate'];
$sql = "SELECT Clave_Mov, Categoria_Mov, Hora_Mov, Fecha_Mov, Tipo_Mov, ID_User, ID_Proyecto FROM movimiento 
        WHERE Fecha_Mov LIKE '%$date%' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
        echo "Clave del movimiento: " . $row["Clave_Mov"]. " | Categoria : " . $row["Categoria_Mov"]. " | Hora:  " .
            $row["Hora_Mov"]." | Fecha : ". $row["Fecha_Mov"]. "| Tipo: ".$row["Tipo_Mov"]."| Usuario vinculado: ".
            $row["ID_User"]."| Proyecto relacionado: ".$row["ID_Proyecto"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<form name = "goBack" action = "inicio.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>
