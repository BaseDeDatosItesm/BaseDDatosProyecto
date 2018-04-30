<!DOCTYPE html>
<html>
<head>
	<title>INSERT USER</title>
    <style type="text/css">

        body
        {
            background-image: url("https://i.imgur.com/G95fuYj.png");
            background-repeat: :no-repeat;
            background-size: 100% 200%;
        }

     form
        {
             margin-top: 100px;
            text-align: center;
            color:darkcyan;
            font-family: "Impact", Charcoal, sans-serif;
            font-size: 20pt;
            padding-bottom: 2px;


        }

    </style>
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
		$id = $_GET['txtId'];
		$fname = $_GET['txtFn'];
		$lname = $_GET['txtLn'];
		$psw = $_GET['txtPsw'];
		$sex = $_GET['selectSex'];
		$email = $_GET['txtEmail'];
		$bdate = $_GET['txtBdate'];


		//We use the previous variables to make the INSERT into the database
		//Also, we create a variable to store the INSERT command for further use in another methods
		$sql = "INSERT INTO usuario
		VALUES ('$id', '$fname', '$lname', '$psw', '$sex', '$email', '$bdate')";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";

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
