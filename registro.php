<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <form method="post" >
    <section class="registro">
        <h1>¡REGISTRATE!</h1>
    	<input class="controls" type="text" name="nombre" placeholder="Nombre Completo" required>
    	<input class="controls" type="text" name="nombreArt" placeholder="Nombre Artistico" required>
        <input class="controls" type="email" name="email" placeholder="Email" required>
        <input class="controls" type="text" name="telefono" placeholder="Telefono de Contacto" required>
        <input class="botons" type="submit" name="registrar">
        <button class="volver"><a href="" name="volver">Volver al Inicio</a></button>
    </section>  
    </form>
    
    <?php
    include ("correo.php")
    ?>
   
</body>
</html>