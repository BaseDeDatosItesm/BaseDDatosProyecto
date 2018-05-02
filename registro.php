<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO</title>
    <style type="text/css">

        H1
        {
            margin-top: 75px;
            text-align: center;
            color:darkcyan;
            font-family: "Impact", Charcoal, sans-serif;
            font-size: 20pt;
            padding-bottom: 2px;
        }

        body
        {
            background-image: url("https://i.imgur.com/G95fuYj.png");
            background-repeat: :no-repeat;
            background-size: 100% 140%;
        }

        form
        {
             margin-top: 50px;
            text-align: center;
            color:darkcyan;
            font-family: "Impact", Charcoal, sans-serif;
            font-size: 20pt;
            padding-bottom: 2px;


        }




    </style>
</head>
<body>

    <H1>Datos del usuario <br></H1>

	<form name = "userData" method="GET" id="id" action="insert.php">
		Identificador: <input type="text" name="txtId" placeholder="Clave de 4 digitos"> <br>
		Primer Nombre: <input type="text" name="txtFn"> <br>
		Apellido: <input type="text" name="txtLn"> <br>
		Sex:
		<select name="selectSex">
		<option value="M">Masculino</option>
		<option value="F">Femenino</option>
		</select> <br>
		Correo Electronico: <input type="email" name="txtEmail"><br>
		Contraseña: <input type="text" name="txtPsw"> <br>
		Fecha de Nacimiento: <input type="date" name="txtBdate"> <br>

		<input type="submit" value= "Registrar" name="btnRegistro">
	</form>

	<form name = "goBack" action = "inicioReal.php">
		<input type="submit" value= "Regresar a Inicio" name="btnBack">
	</form>

</body>
</html>
