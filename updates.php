<!DOCTYPE>
<html>
<head>
    <title>DELETES</title>

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
<h1>Nuevos Registros</h1>

<table align = "center">


    <tr class = "diffColor">
        <td>Modificar Usuario</td>
        <td>
            <form action="updateUser.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Modificar Proyecto</td>
        <td>
            <form action="updateProy.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Modificar Proveedor</td>
        <td>
            <form action="updateProv.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Modificar Articulo</td>
        <td>
            <form action="updateArt.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>



    <tr>
        <td colspan="2">
            <form name = "goBack" action = "inicioReal.php">
                <input type="submit" value= "Inicio" name="btnBack">
            </form>
        </td>
    </tr>
</table>







</body>
</html>