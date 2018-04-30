<!DOCTYPE>
<html>
<head>
    <title>TEST</title>

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
            background-size: 100% 200%;
            
        }

        form
        {
            
            text-align: center;
            color:darkcyan;
            font-family: "Impact", Charcoal, sans-serif;
            font-size: 12pt;
            


        }




    </style>
</head>
<body>
    <h1>MOVIMIENTOS DIARIOS</h1>
<td>
    <form>Seleccione dia a consultar:</form>
    <form name = "day" action = "showMov.php" method="GET">
        <input type="date" name="selectDate">
        <input type="submit" value= "Mostrar" name="btnMostrar">
    </form>
</td>

    <h1>MOVIMIENTOS MENSUALES</h1>
<td>
    <form name = "month" action="showMov.php" method="GET">
         <br>
        Seleccione mes a consultar:
        <select name="selectDate">
            <option value="01">Enero</option>
            <option value="02">Febrero</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Mayo</option>
            <option value="06">Junio</option>
            <option value="07">Julio</option>
            <option value="08">Agosto</option>
            <option value="09">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
        <input type="submit" value= "Mostrar" name="btnShowAll">
    </form>
</td>




<form name = "goBack" action = "inicio.php">
    <input type="submit" value= "Regresar a Inicio" name="btnBack">
</form>

</body>
</html>