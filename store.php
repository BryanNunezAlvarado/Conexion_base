     <?php
     include("conexion.php");
     if(count($_POST) > 0 )
     {
         $nombre =  $_POST['nombre'];
         $email =  $_POST['email'];
         $contrasena =  $_POST['contrasena'];
         $mensaje =  $_POST['mensaje'];
         $ciudad =  $_POST['select'];
         $sql = "INSERT INTO tabla (nombre,email,contrasena,mensaje,ciudad)VALUES ('$nombre', '$email', '$contrasena', '$mensaje','$ciudad')";
             $conn->exec($sql);
     }
            header('Location: index.php');
     ?>