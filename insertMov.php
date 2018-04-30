<!DOCTYPE html>
<html>
<head>
	<title>INSERT MOV</title>
</head>
<body>
	<form>
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

		//We get the values from registro.php's text boxes and assign them to variables

		$tipo = $_POST['selectType'];
		$cat = $_POST['txtCat'];
		$hora = $_POST['txtTime'];
		$fecha = $_POST['txtDate'];
		$user = $_POST['txtIdUser'];
		$project = $_POST['txtIdProy'];

    $quantity = $_POST['numQty'];
    $sku = $_POST['txtSKU'];



		//We use the previous variables to make the INSERT into the database
		//Also, we create a variable to store the INSERT command for further use in another methods
		$sql = "INSERT INTO movimiento
		VALUES (NULL, '$cat', '$hora', '$fecha','$tipo' ,'$user', '$project','$sku')";




		if (mysqli_query($conn, $sql)) {
		    echo "New movement created successfully";



		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);

 //TRY AGAIN

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $quantity = $_POST['numQty'];
    $sku = $_POST['txtSKU'];

    if ($tipo == 'Entrada') {
      $sql = "UPDATE articulo
      SET qty_actual = qty_actual + '$quantity'
      WHERE SKU_Articulo = '$sku'";
    } else if ($tipo == 'Salida') {
      $sql = "UPDATE articulo
      SET qty_actual = qty_actual - '$quantity'
      WHERE SKU_Articulo = '$sku'";
    }

    if (mysqli_query($conn, $sql)) {
		    echo "New article created successfully";

		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
	</form>

	<form name = "goBack" action = "inicio.php">
		<input type="submit" value= "Regresar a Inicio" name="btnBack">
	</form>

</body>
</html>
