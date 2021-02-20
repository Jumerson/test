<?php
	NuevaObservacion($_POST['Nombre'], $_POST['Expediente'], $_POST['Observacion'], $_POST['Departamento']);
		function NuevaObservacion($Nombre, $Expediente, $Observacion, $Departamento)
		{
			include("cn.php");
    $table = mysqli_query($conn,"INSERT INTO $Departamento (Nombre, Expediente, Observacion) VALUES ('".$Nombre."', '".$Expediente."', '".$Observacion."')");
	}
?>
<script type="text/javascript">
	alert("Observacion enviada exitosamente");
	window.location.href='index.php';
</script>
