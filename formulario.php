<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body style="background-color:#cd6d6d;">
<?php
       include("conexion.php")
    ?>
<div>
    <a class="bg-2" href="Index.html"><h1 class="t-stroke-shadow">INDEX</h1></a>.
</div>

    <form action="store.php" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>
        <label for="email" />Email</label>
        <input type="email" name="email" id="email" placeholder="email" required />
        <label for="contraseña">Contraseña</label>
        <input type= "password" name="contraseña" id="contraseña" placeholder="Password" required/>
        <br>
        <label for="nombre">Comentario</label>
        <textarea name="mensaje" for="mensaje" placeholder="Añade comentario" maxlength="300"></textarea>
        <label for="nombre">Ciudad</label>
        <select name="select">
            <option value="value1">Guadalajara</option>
            <option value="value2" selected>Zapopan</option>
            <option value="value3">Tonala</option>
            <option value="value4">Otra</option>
        </select>
        <br></br>


        <input type="submit" name="enviar" value="enviar datos"/>
    </form>
</div>
</body>
</html>