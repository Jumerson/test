<?php
include("cn.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
            <h1>Departamento X</h1>
              <br>You are Successfully Logged In</br>
              <a href="logout.php">Logout</a><a href="registro.php">Registro</a><a href="iniciodesecion.php">Inicio de secion</a>
        <table>
    			<tr>
            <th>ID</th>
    				<th>Nombre</th>
    				<th>Expediente</th>
    				<th>Mensage</th>
    				<th>Respuesta</th>
            <th> <a href="nuevaobservacion.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
    			</tr>
          <?php
              include("recolectar.php");
              ?>
		</table>
    </form>
  </body>
</html>
