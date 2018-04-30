<!DOCTYPE html>
<html>
<head>
	<title>INICIO</title>
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
	  <td>Consulta de Proveedores</td>
	  <td>
	  	<form action="indice.php">
    		<input type="submit" value="Check" />
		</form>
	</td>
	</tr>

    <tr>
        <td>Consulta de Usuarios</td>
        <td>
            <form action="indiceUser.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

	<tr class = "diffColor">
	  <td>Registro de Usuario</td>
	  <td>
	  	<form action="registro.php">
    		<input type="submit" value="Check" />
		</form>
	</td>
	</tr>

	 <tr>
	  <td>Registro de Proyectos</td>
	  <td>
	  	<form action="registroProy.php">
    		<input type="submit" value="Check" />
		</form>
	</td>
	</tr>

	<tr>
	  <td>Registro de Proveedores</td>
	  <td>
	  	<form action="registroProve.php">
    		<input type="submit" value="Check" />
		</form>
	</td>
	</tr>

	<tr>
	  <td>Registro de Articulos</td>
	  <td>
	  	<form action="registroArticulos.php">
    		<input type="submit" value="Check" />
		</form>
	</td>
	</tr>

	<tr>
	  <td>Registro de Movimientos</td>
	  <td>
	  	<form action="registroMov.php">
    		<input type="submit" value="Check" />
		</form>
	</td>
	</tr>

    <tr>
        <td>Movimientos por periodo</td>
        <td>
            <form action="checkMov.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Consulta de Material Agotado</td>
        <td>
            <form action="selectAgotado.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Consulta de Material Escaso</td>
        <td>
            <form action="selectEscaso.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Consulta de Material Suficiente</td>
        <td>
            <form action="selectSuf.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>

    <tr>
        <td>Consulta de Inventario Actual</td>
        <td>
            <form action="selectInv.php">
                <input type="submit" value="Check" />
            </form>
        </td>
    </tr>



	</table>

    <div class="vertical-menu">
        <a href="inicio.php" class="active">Home</a>
        <a href="consulta.php">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
    </div>

</body>
</html>
