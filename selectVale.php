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
<?php
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 01/05/2018
 * Time: 01:31 PM
 */
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
$user = $_GET['txtSSN'];
$date = $_GET['selectDate'];
$hoy = date("H:i:s");
//$date = date('l jS \of F Y h:i:s A');

echo <<< HTML
<br>
 <center>

 
<br>
	<table id="encabezado">
	<tr>
			<th>VALE DE SOLICITUD DE MATERIAL</th>
	</tr>
	<tr>
	    <td>
	        Fecha: $date<br>
	        Hora: $hoy
        </td>	
    </tr>
	
	
	</table>
	<table id="listado">
		<tr>
			<th>SKU</th>
			<th>Nombre articulo</th>
			<th>Cantidad</th>
			<th>Proyecto</th>
			
		</tr>
HTML;




$sql = "SELECT articulo.SKU_Articulo, articulo.Nombre, movimiento.quantity, movimiento.ID_Proyecto
FROM movimiento, articulo
WHERE movimiento.Categoria_Mov = 'Prestamo'
AND movimiento.SKU = articulo.SKU_Articulo
AND movimiento.Fecha_Mov LIKE '%$date%'
AND movimiento.ID_User = $user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_array($result)) {
        //echo "Codigo: " . $row["Codigo"]. " | Nombre : " . $row["Nombre"]. " |Direccion:  " . $row["Direccion_Sucursal"]."<br>";
        $code = $row[0];
        $name = $row[1];
        $qty = $row[2];
        $pro = $row[3];

        echo <<< HTML
        
        
	
		<tr>
			<td>$code</td>
			<td>$name</td>
			<td>$qty</td>
			<td>$pro</td>
			
		</tr>
		
        <table>
            <tr>
               <td>
                
               </td> 
            </tr>
            
            <tr>
		        <td>Clave de usuario: $user
		        </td>
		        
		    </tr>
		    <tr>
		        <td>
		            Firma de entregado: _____________
                </td>
		    </tr>
		    
		    
		    
        
        </table>
        <br>
        <form name = "goBack" action = "inicioReal.php">
                    <input type="submit" value= "Inicio" name="btnBack">
                </form>
        

HTML;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</form>
</body>
</html>

