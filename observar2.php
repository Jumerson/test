<?php
	Responder($_POST['Nombre'], $_POST['Expediente'], $_POST['Observacion'], $_POST['Respuesta'], $_POST['ID']);
	function Responder($Nombre, $Expediente, $Observacion, $Respuesta, $ID)
	{
    include("cn.php");
    $table = mysqli_query($conn, "UPDATE ingenieria SET Nombre='".$Nombre."', Expediente= '".$Expediente."', Observacion='".$Observacion."', Respuesta='".$Respuesta."' WHERE ID='".$ID."' ");
	}
?>
<script type="text/javascript">
	alert("Respuesta Enviada exitosamente");
	window.location.href='index.php';
</script>
