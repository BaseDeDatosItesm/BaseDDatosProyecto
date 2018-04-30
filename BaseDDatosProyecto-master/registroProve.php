<!DOCTYPE html>
<html>
<head>
	<title>Registro Proveedores</title>

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
            background-size: 100% 180%;
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

    <H1>Datos del Proveedor: <br></H1>

	<form name="regProve" action="insertProve.php" method="POST">

		Codigo: <input type="text" name="txtCodigo" placeholder="Clave de 9 digitos"> <br>
		Nombre del proveedor: <input type="text" name="txtName"> <br>
		Correo Electronico: <input type="email" name="txtEmail"> <br>
		Direccion de la sucursal: <input type="text" name="txtDirec"> <br>

		<input type="submit" name="btnRegProve" value="Registrar">
	</form>

	<form name = "goBack" action = "inicio.php">
		<input type="submit" value= "Regresar a Inicio" name="btnBack">
	</form>

</body>
</html>
