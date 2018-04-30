<!DOCTYPE html>
<html>
<head>
	<title>InsertProyecto</title>
</head>
<body>
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

  $sku = $_GET['txtSKU'];
  $cost = $_GET['txtCost'];
  $name = $_GET['txtName'];
  $description = $_GET['txtDesc'];
  $tipoMed = $_GET['txtTipoMed'];
  $cantMax = $_GET['numCntMax'];
  $cantMin = $_GET['numCntMin'];
  $puntoReorden = $_GET['numPR'];
  $cat = $_GET['selectCat'];

  $sql = "INSERT INTO articulo VALUES ('$sku', '$cost', '$description', '$tipoMed', '$name', '$cantMax', '$cantMin', '$puntoReorden',0,'$cat')";

  if (mysqli_query($conn, $sql)){
    echo "Nuevo articulo registrado correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
 ?>
 <form name = "goBack" action = "inicio.php">
   <input type="submit" value= "Regresar a Inicio" name="btnBack">
 </form>

</body>
</html>
