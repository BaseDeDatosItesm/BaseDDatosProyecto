<!DOCTYPE>
<html>
  <head>
    <title>TEST</title>
  </head>
  <body>
    <form name="registro" action="insertArticulo.php" method="GET">
      REGISTRO DE ARTICULOS
      SKU: <input type="text" name="txtSKU"> <br>
      COSTO: <input type="text" name="txtCost"> <br>
      NOMBRE: <input type="text" name= "txtName"> <br>
      DESCRIPCION: <input type="text" name="txtDesc"> <br>
      TIPO DE MEDICION: <input type="text" name= "txtTipoMed"> <br>
      CANTIDAD MAXIMA: <input type="number" name="numCntMax"> <br>
      CANTIDAD MINIMA: <input type= "number" name= "numCntMin"> <br>
      PUNTO DE REORDEN: <input type = "number" name= "numPR"> <br>

      <input type="submit" name="btnRegistrar" value="Registrar">
    </form>
    <form name = "goBack" action = "inicio.php">
  		<input type="submit" value= "Regresar a Inicio" name="btnBack">
  	</form>
  </body>


</html>
