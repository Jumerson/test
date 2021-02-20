
<?php
include("cn.php");
include("consulta.php");
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
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Products Modification</h1>
    <form action="observar2.php" method="POST">
      <input type="hidden" name="ID" value="<?php echo $_GET['ID']?> ">
      <input name="Nombre" type="text" value="<?php echo $consulta[0] ?>">
      <input name="Expediente" type="text" value="<?php echo $consulta[1] ?>">
      <input name="Observacion" type="text" value="<?php echo $consulta[2] ?>">
      <input name="Respuesta" type="text" value="<?php echo $consulta[3] ?>">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
