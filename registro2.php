<?php
	NuevaPersonal($_POST['Nombre'], $_POST['Contraseña'], $_POST['Departamento']);
		function NuevaPersonal($Nombre, $Contraseña, $Departamento)
		{
			include("cn.php");
    $table = mysqli_query($conn,"INSERT INTO usuario (Nombre, Contraseña, Departamento) VALUES ('".$Nombre."', '".$Contraseña."', '".$Departamento."')");
	}
?>
<script type="text/javascript">
	alert("Nuevo usuario agregado exitosamente");
	window.location.href='index.php';
</script>
