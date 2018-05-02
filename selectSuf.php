<!DOCTYPE html>
<html>
<head>
    <title>SELECT</title>
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



    </style>
</head>
<body>
<form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistemainv";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    echo <<< HTML
<br>
 <center>

 
<br>
	<table id="encabezado">
	<tr>
			<th>PRODUCTOS SUFICIENTES</th>
	</tr>
	</table>
	<table id="listado">
		<tr>
			<th>SKU </th>
			<th>Nombre del articulo</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
		
			
			
			
		</tr>
HTML;




    $sql = "SELECT SKU_Articulo, Nombre, descripcion, qty_actual FROM articulo WHERE qty_actual > Punt_Reorden";
    $result = mysqli_query($conn, $sql);






    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        while($row = mysqli_fetch_array($result)) {
            //echo "Codigo: " . $row["Codigo"]. " | Nombre : " . $row["Nombre"]. " |Direccion:  " . $row["Direccion_Sucursal"]."<br>";
            $code = $row[0];
            $name = $row[1];
            $desc = $row[2];
            $qty = $row[3];


            echo <<< HTML
	
		<tr>
			<td>$code</td>
			<td>$name</td>
			<td>$desc</td>
			<td>$qty</td>
			
			
		</tr>
HTML;
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
</form>
<form name = "goBack" action = "inicioReal.php">
    <input type="submit" value= "Inicio" name="btnBack">
</form>
</body>
</html>