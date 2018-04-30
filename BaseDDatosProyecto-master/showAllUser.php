<?php
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


$sql = "SELECT ID, Nombre, Apellido, Sexo, Fecha_Nac FROM usuario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
        echo "Codigo: " . $row["ID"]. " | Nombre: " . $row["Nombre"]. " | Apellido: " . $row["Apellido"]. " | Sexo: " . $row["Sexo"]." | Fecha nac: ".$row["Fecha_Nac"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<form name = "goBack" action = "inicio.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>
