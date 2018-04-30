<!DOCTYPE>
<html>
<head>
    <title>TEST</title>

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
<form name = "indiceUser" action = "selectUser.php" method="GET">
    INGRESE USUARIO A CONSULTAR <br>
    Identificador: <input type="text" name="txtId" value="">
    <input type="submit" value= "Mostrar" name="btnMostrar">
</form>

<form name="mostrarTodos" action="showAllUser">
    <input type="submit" value= "MostrarTodos" name="btnShowAll">
</form>

<form name = "goBack" action = "inicio.php">

    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>

</body>
</html>
