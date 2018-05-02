<!DOCTYPE html>
<html>
<head>
	<title>Insert Proveedor</title>
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

		$id = $_POST['txtCodigo'];
		$name = $_POST['txtName'];
		$email = $_POST['txtEmail'];
		$direccion = $_POST['txtDirec'];

		$sql = "INSERT INTO proveedor VALUES ('$id', '$name', '$direccion', '$email')";

		if (mysqli_query($conn, $sql)){
			echo "Nuevo proveedor registrado correctamente";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	?>

	<form name = "goBack" action = "inicioReal.php">
		<input type="submit" value= "Regresar a Inicio" name="btnBack">
	</form>

</body>
</html>
