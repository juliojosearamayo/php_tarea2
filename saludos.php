<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="main-header">
		<div class="container clearfix">
			<h1 class="name"><a href="#">Optica ROVER</a></h1>
			<ul class="main-nav">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="galeria.php">Galeria</a></li>
				<li><a href="contacto.php">Contacto</a></li>
			</ul>
		</div>

		
	</header><!--/.main-header-->
    <h1> Página de bienvenida</h1>
    <?php // Empieza el código php
    if ($_GET["nombre"]=="XXX") {  // Si el nombre es XXX
    	echo(" Hombre ".$_GET["nombre"]."! Ya estás cotilleando por aquí otra vez!"); // saludo especial
    }else {
    	echo("Hola, ".$_GET["nombre"].", gracias por visitarnos"); // saludo para los demás
    }
    ?>
</body>
</html>