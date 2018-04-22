<!DOCTYPE html>
<html>
<head>
	<title>SELECT</title>
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

		$ssnLook = $_GET['txtSSN'];

		$sql = "SELECT codigo, nombre, direccion_sucursal, e-mail FROM employee WHERE $ssnLook = codigo";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		        echo "ssn: " . $row["ssn"]. " - Name: " . $row["fname"]. " Sex:  " . $row["sex"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}

		mysqli_close($conn);
	?>
	</form>
	<form name = "goBack" action = "inicio.php">
		<input type="submit" value= "Regresar a Inicio" name="btnBack">
	</form>
</body>
</html>
