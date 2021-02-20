<<?php
$consulta2=ConsultarUsuario($_GET['Nombre'], $_GET['Contraseña']);

 function ConsultarUsuario($Nombre,$Contraseña)
 {
  include("cn.php");
   $table = mysqli_query($conn, "SELECT * FROM usuario WHERE Nombre = '".$Nombre."' AND Contraseña = '".$Contraseña."'");
   $row = mysqli_fetch_assoc($table);
   return [
     $row['ID'],
      $row['Nombre'],
      $row['Contraseña'],
      $row['Departamento']
    ];
 }
 ?>
 <script type="text/javascript">
 	alert("Nuevo usuario agregado exitosamente");
 	window.location.href='index.php';
 </script>
