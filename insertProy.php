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

		$id = $_POST['txtId'];
		$name = $_POST['txtName'];
		$date = $_POST['txtDate'];
		$description = $_POST['txtDesc'];
		$manager = $_POST['txtMngr'];

		$sql = "INSERT INTO proyecto VALUES ('$id', '$manager' , '$description', '$name', '$date')";

		if (mysqli_query($conn, $sql)){
			echo "Nuevo proyecto registrado correctamente";
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
