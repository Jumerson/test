<<?php
$consulta=ConsultarProducto($_GET['ID']);

 function ConsultarProducto($no_prod)
 {
  include("cn.php");
   $table = mysqli_query($conn, "SELECT * FROM ingenieria WHERE ID = '".$no_prod."'");
   $row = mysqli_fetch_assoc($table);
   return [
     $row['Nombre'],
      $row['Expediente'],
      $row['Observacion'],
      $row['Respuesta']
    ];
 }
 ?>
