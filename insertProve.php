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
		$dbname = "example";

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

		$sql = "INSERT INTO proyectos VALUES ('$id', '$name', '$email', '$direccion')";

		if (mysqli_query($conn, $sql)){
			echo "Nuevo proyecto registrado correctamente";
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