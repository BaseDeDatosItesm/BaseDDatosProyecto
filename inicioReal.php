<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SISTEMAINV</title>
    <style type="text/css">

        body
        {
            background-image: url("https://i.imgur.com/G95fuYj.png");
            background-repeat: :no-repeat;
            background-size: 100% 210%;
        }

        h1
        {
            text-align: center;
            color:darkcyan;
            font-family: "Impact", Charcoal, sans-serif;
            padding-bottom: 2px;
        }

        td
        {
            background-color:#F4F4FF;
        }

        th
        {
            /*border-bottom: solid .75em #D5D5FF;*/

        }

        table, td, th
        {
            /*border: solid 1px #D5D5FF;*/
            color:darkcyan;
            border-collapse: collapse;
            font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size:15pt;
            text-align: center;
        }

        td,th
        {
            padding: 5px;
        }

        /*tr:nth-child(2n+1) td
        {
            background-color: #fff;
        }*/
        .vertical-menu {
            width: 200px; /* Set a width if you like */
        }

        .vertical-menu a {
            background-color: #eee; /* Grey background color */
            color: black; /* Black text color */
            display: block; /* Make the links appear below each other */
            padding: 12px; /* Add some padding */
            text-decoration: none; /* Remove underline from links */
        }

        .vertical-menu a:hover {
            background-color: #ccc; /* Dark grey background on mouse-over */
        }

        .vertical-menu a.active {
            background-color: #4CAF50; /* Add a green color to the "active/current" link */
            color: white;
        }


    </style>
</head>
<body>
<div class="test-box"></div>
<h1>SISTEMA DE INVENTARIOS</h1>

<table align = "center">
    <tr>
        <th colspan="2"><strong>Bienvenido</strong></th>
        <th><strong> </strong></th>

    </tr>

    <tr>
        <th colspan="2"><strong>¿Que desea hacer?</strong></th>
        <th><strong> </strong></th>

    </tr>

    <tr>
        <td>Generar un nuevo Registro</td>
        <td>
            <form action="inserts.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Modificar un registro existente</td>
        <td>
            <form action="updates.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr class = "diffColor">
        <td>Eliminar un registro existente</td>
        <td>
            <form action="deletes.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Consultar un reporte</td>
        <td>
            <form action="consultas.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

</body>
</html>