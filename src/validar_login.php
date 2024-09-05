<?php

error_reporting(0);
$coneccion=mysqli_connect("127.0.0.1","root","","bd_handmade");



$contrasena_dig_for_encrip=md5($contrasena);

$consultar_bd=mysqli_query($coneccion,"select user_email,user_password from clientes");

while($dato_uno_por_uno=mysqli_fetch_array($consultar_bd))
{

    $email_bd=$dato_uno_por_uno["user_email"];

    $clave_bd=$dato_uno_por_uno["user_password"];


    

    if($username==$email_bd)
    {
        /// Validó que el correo es correcto
        if($contrasena_dig_for_encrip==$clave_bd)
        {
           
            ?> 
                <script>
                window.location.href="http://localhost/hechoamano/index.php";
                </script>
            <?php
        }
        else
        {
            ?> 
                <script>
                window.location.href="http://localhost/hechoamano/login.php";
                </script>
            <?php
            
        }
    }



}


?>
