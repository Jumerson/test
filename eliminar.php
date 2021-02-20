<?php
	EliminarComentario($_GET['ID']);
	function EliminarComentario($no)
	{
    include("cn.php");
    $table = mysqli_query($conn,"DELETE FROM ingenieria WHERE ID='".$no."' ");
	}
?>
<script type="text/javascript">
	alert("Comentario Eliminado exitosamente");
	window.location.href='index.php';
</script>
