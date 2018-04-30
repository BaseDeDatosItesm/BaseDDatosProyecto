<!DOCTYPE>
<html>
  <head>
    <title>TEST</title>
  </head>
  <body>
    <form name="registro" action="insertArticulo.php" method="GET">
        <h1>REGISTRO DE ARTICULOS</h1> <br>
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

      <input type="submit" name="btnRegistrar" value="Registrar">
    </form>
    <form name = "goBack" action = "inicio.php">
  		<input type="submit" value= "Regresar a Inicio" name="btnBack">
  	</form>
  </body>


</html>
