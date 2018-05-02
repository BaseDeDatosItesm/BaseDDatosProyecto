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


<H1>Datos a Modificar <br></H1>

<form name = "provData" method="GET" id="id" action="updateProvSQL.php">
    Codigo: <input type="text" name="txtCodigo" placeholder="Clave de 4 digitos"> <br>
    Nombre del proveedor: <input type="text" name="txtName"> <br>
    Correo Electronico: <input type="email" name="txtEmail"> <br>
    Direccion de la sucursal: <input type="text" name="txtDirec"> <br>

    <input type="submit" value= "Registrar" name="btnRegistro">
</form>

<form name = "goBack" action = "inicioReal.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>

</body>
</html>