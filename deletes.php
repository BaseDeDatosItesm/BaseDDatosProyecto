<!DOCTYPE>
<html>
<head>
    <title>DELETES</title>

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

<table bgcolor="#f0f8ff">
    <tr align="center" colspan="8">
        <h1 align="center">ELIMINAR REGISTROS</h1>
    </tr>

    <td>
        <form name = "indiceUser" action = "deleteUser.php" method="GET">
            Ingrese Usuario a eliminar  <input type="text" name="txtId" value="" placeholder="ID de 4 digitos">
            <input type="submit" value= "Borrar" name="btnMostrar" >
        </form>
    </td>

    <td >
        <form name = "indiceProve" action = "deleteProve.php" method="GET">
            Ingrese Proveedor a eliminar  <input type="text" name="txtId" value="" placeholder="Codigo de 4 digitos">
            <input type="submit" value= "Borrar" name="btnMostrar">
        </form>

    </td>

    <td>
        <form name = "indiceArt" action = "deleteArt.php" method="GET">
            Ingrese Articulo a eliminar    <input type="text" name="txtId" value="" placeholder="SKU de 4 digitos">
            <input type="submit" value= "Borrar" name="btnMostrar">
        </form>

    </td>

    <td>
        <form name = "indiceProy" action = "deleteProy.php" method="GET">
            Ingrese Proyecto a eliminar <input type="text" name="txtId" value="" placeholder="Clave de 4 digitos">
            <input type="submit" value= "Borrar" name="btnMostrar">
        </form>

    </td>
</table>





<form name = "goBack" action = "inicioReal.php">

    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>

</body>
</html>