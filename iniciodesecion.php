<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Login</h1>
    <form action="iniciodesecion2.php" method="POST">
      <input name="Nombre" type="text" placeholder="Enter your email">
      <input name="Contraseña" type="text" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
