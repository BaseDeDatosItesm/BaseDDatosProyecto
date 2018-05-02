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

<form name = "artData" method="GET" id="id" action="updateArtSQL.php">
    SKU: <input type="text" name="txtSKU" placeholder="Clave de 3 caracteres"> <br>
    NOMBRE: <input type="text" name= "txtName"> <br>
    DESCRIPCION: <input type="text" name="txtDesc"> <br>
    TIPO DE MEDICION: <input type="text" name= "txtTipoMed"> <br>
    COSTO: <input type="text" name="txtCost"> <br>
    CANTIDAD MAXIMA: <input type="number" name="numCntMax"> <br>
    CANTIDAD MINIMA: <input type= "number" name= "numCntMin"> <br>
    PUNTO DE REORDEN: <input type = "number" name= "numPR"> <br>
    CATEGORIA DEL ARTICULO: <select name="selectCat">
        <option>Material Electrico</option>
        <option>Material Mecanico</option>
        <option>Material Peligroso</option>
        <option>Solventes y Pinturas</option>
        <option>Tornilleria</option>
    </select> <br>

    <input type="submit" value= "Registrar" name="btnRegistro">
</form>

<form name = "goBack" action = "inicioReal.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>

</body>
</html>