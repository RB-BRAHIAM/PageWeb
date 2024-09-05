<?php





/***********Conectar a la base de datos**************/

$coneccion= mysqli_connect("127.0.0.1","root","", "bd_handmade");

//var_dump($coneccion);  // Imprime la variable o el array

//die(); // Detiene el código php


 



$Name_user=$_POST["user_name"];
$Email=$_POST["user_email"];
$Password=$_POST["user_password"];


$Encript_password=md5($Password);




$insertar=mysqli_query($coneccion,"insert into clientes( user_name , user_email, user_password )values('".$Name_user."','".$Email."' ,'".$Encript_password."' )");


if($insertar==true)
{
    ?> 
    <script>
    window.location.href="http://localhost/handmade2.0/index.php";
    </script>
<?php
}

else
{
?>
<script>
    window.location.href="http://localhost/handmade2.0/registro_no_exitoso.php";
    </script>
<?php
}

