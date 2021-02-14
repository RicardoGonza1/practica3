<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /proyecto php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Usted acaba de cerrar la sesion</title>
	</head>
	<body>

	</body>
</html>
