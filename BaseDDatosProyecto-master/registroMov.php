<!DOCTYPE html>
<html>
  <head>
    <title>Registro de Movimientos</title>
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
                font-size: 20pt;
            }
          
    </style>
      
  </head>
  <body>
    <H1>Datos del Movimiento: <br></H1>

  	<form name="regMov" action="insertMov.php" method="POST">


      Tipo de Movimiento:
      <select name="selectType">
        <option value="Entrada">Entrada </option>
        <option value="Salida">Salida </option>
      </select> <br>
  		Categoria del Movimiento: <input type="" name="txtCat"> <br>

      Clave del articulo: <input type="text" name="txtSKU"> <br>
      Cantidad de articulos: <input type="number" name="numQty"> <br>

      Hora: <input type="time" name="txtTime"> <br>
  		Fecha: <input type="date" name="txtDate"> <br>
      Clave del usuario relacionado:<input type="text" name="txtIdUser"> <br>
      Clave del proyecto (si aplica): <input type="text" name="txtIdProy"> <br>


  		<input type="submit" name="btnRegMov" value="Registrar">
  	</form>

  	<form name = "goBack" action = "inicio.php">
  		<input type="submit" value= "Regresar a Inicio" name="btnBack">
  	</form>


  </body>
</html>
