     <?php
     include("conexion.php");
     if(count($_POST) > 0 )
     {
         $nombre =  $_POST['nombre'];
         $email =  $_POST['email'];
         $contraseña =  $_POST['contraseña'];
         $mensaje =  $_POST['mensaje'];
         $ciudad =  $_POST['select'];
         $sql = "INSERT INTO tabla (nombre,email,contraseña,mensaje,ciudad)VALUES ('$nombre', '$email', '$contraseña', '$mensaje','$ciudad')";
             $conn->exec($sql);
     }
            header('Location: index.php');
     ?>