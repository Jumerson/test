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

    <h1>Registro</h1>

    <form action="registro3.php" method="POST">
      <input name="Nombre" type="text" placeholder="Nombre">
      <input name="Contraseña" type="password" placeholder="Contraseña">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <select name="Departamento" type="text" placeholder="Departamento">
        <option value="">-------------</option>
        <option value="ingenieria">ingenieria</option>
        <option value="humanidades">humanidades</option>
      </select>
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
