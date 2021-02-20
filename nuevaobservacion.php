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
    <h1>Nueva Observacion</h1>
    <form action="nuevaobservacion2.php" method="POST">
      <input name="Nombre" type="text" placeholder="Nombre">
      <input name="Expediente" type="text" placeholder="Expediente">
      <input name="Observacion" type="text" placeholder="Observacion">
      <select name="Departamento" type="text" placeholder="Departamento">
        <option value="">-------------</option>
        <option value="ingenieria">ingenieria</option>
        <option value="humanidades">humanidades</option>
      </select>
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
