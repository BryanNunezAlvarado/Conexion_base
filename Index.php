<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica HTML</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body style="background-color:#5eddad;">
    <div>
        <a class="bg-2" href="formulario.php"><h1 class="t-stroke-shadow">FORMULARIO</h1></a>.
    </div>
    <H1 align="center">
        Bryan Daniel Nuñez Alvarado
    </H1>
    <section>
        <h1>Acerca de Mi</h1>
        <p>Soy daniel, tengo 21 años, actualmente estudio la carrera de Ingenieria en Computacion en Cucei, soy el menor de 3 hijos
        mi familia viene de tequila jalisco, me dedico al mundo del streaming, me gusta aprender cosas nuevas <br></br>leer,salir con mis amigos
        pasar tiempo con mi familia y ver peliculas.</p>
    </section>
    <section>
        <h1>Mis conocimientos</h1>
        <ul>
            <li>Edicion de video</li>
            <li>Programar en lenguaje C</li>
            <li>Programar en lenguaje C++</li>
            <li>Fotografia</li>
            <li>Tocar Instrumentos musicales</li>
        </ul>
    </section>
    <section>
        <h1>Mis Fortalezas</h1>
        <ol>
            <li>Soy una persona Dedicada</li>
            <li>Soy responsable</li>
            <li>Soy paciente</li>

        </ol>
    </section>
    <section>
        <h1>Proyectos</h1>
        <table class="default">

            <tr>

                <td>Nombre proyecto</td>

                <td>Lenguajes</td>

                <td>Descripcion</td>

            </tr>

            <tr>

                <td>Biblioteca</td>

                <td>Html,php,MySQL</td>

                <td>este proyecto se baso en realizar una tienda de libros virtual en una pagina web, conectada a una base de datos
                en donde el usuario podria registrarse,cambiar contraseña,comprar libros, rentar libros, al igual
                se tenia el manejo de roles de usuario, donde el administrador podia añadir libros y eliminarlos. tenia
                la funcionalidad de añadir a carrito y comprar, ademas se podia buscar el libro por el titulo y se manejaban por categorias</td>

            </tr>
            <tr>

                <td>Reproductor de Musica</td>

                <td>Html,php,MySQL</td>

                <td>Este proyecto se baso en realizar una pagina web donde se reprodujera musica, en este caso igual se manejaban
                roles, usuario y administrador, donde el usuario podia escuchar musica, buscar por genero y artista, y el administrador
                podia cargar canciones, elimina canciones y colocar los mas sonados, todo esto estaba conectado a una base de datos
                y cada usuario tenia su cuenta donde podia guardar sus canciones para escucharlas despues.</td>

            </tr>
            <tr>

                <td>Inteligencia artificial</td>

                <td>Python</td>

                <td>En este proyecto se necesito hacer una Skill de alexa, la cual fue bastante facil de programar
                alexa tiene una pagina en donde crear las skills es demasiado facil, de hecho desde la pagina web se hizo todo
                solo se debio de importar el archivo de Python, en mi caso hice la skill de las capitales del mundo, tu le decias por ejemplo
                "alexa ¿cual es la capital de japon?" y ella te decia la respuesta, asi para todas las capitales del mundo</td>

            </tr>

        </table>
    </section>
    <section>
        <h1>Persona que admiro</h1>
        <img src="imagen.jpg" alt="Imagen" width="200px">
        <br>
        <b>Nikola Tesla</b>
        <p>un hombre que dedicó su vida a resolver los misterios de la electricidad y a idear la manera de lograr que este fenómeno hiciera más fácil la vida de las personas</p>
        <a href="https://es.wikipedia.org/wiki/Nikola_Tesla" target="_blank">Biografia de Nikola Tesla</a>
    </section>

    <div class="footer">
        <section>
            <p>Contactarme 3317484377</p>
            <a href="mailto:bryan.nunez2941@alumnos.udg.mx">Contactar por correo</a>

        </section>

    </div>
    <?php
        include("conexion.php");

        echo '<center><span text-align: center; style="color:#a42706;font-size:25px;">Datos</span></center>';


        $query= $conn->query('select * from tabla');
        $query->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $query->fetch()) {
                echo "nombre:" .$row['nombre'] . "<br/>";
                echo "email:" .$row['email'] . "<br/>";
                echo "contraseña:" .$row['contrasena'] . "<br/>";
                echo "mensaje:" .$row['mensaje'] . "<br/>";
                echo "Ciudad:" .$row['ciudad'] . "<br/>";
                echo "<br/><br/>";
            }

    ?>

</body>
</html>