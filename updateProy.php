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


<H1>Datos a Modificar: <br></H1>

<form name="regProy" action="updateProySQL.php" id="id" method="GET">

    Identificador <input type="text" name="txtId" placeholder="Clave de 4 digitos"> <br>
    Nombre del proyecto: <input type="text" name="txtName"> <br>
    Fecha de inicio: <input type="date" name="txtDate"> <br>
    Descripcion del proyecto: <input type="text" name="txtDesc"> <br>
    Clave del Responsable de Proyecto <input type="text" name="txtMngr"> <br>

    <input type="submit" name="btnRegProy" value="Registrar">
</form>

<form name = "goBack" action = "inicioReal.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>

</body>
</html>