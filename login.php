<?php
session_start();
?>
<!DOCTYPE html>
<html lang "es">
  <head>
	<meta charset ="utf-8">
	<title>Formulario</title>
  </head>

  <body>
	<header>
	</header>
	<section id="sidebar">
	</section>
	<section id="main">
<?php
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];

echo "variable:" . $_SESSION['nombre'];
echo "variable:" . $_SESSION['apellido'];

//print_r($_REQUEST);

?>
  </body>
</html>
