<?php





/***********Conectar a la base de datos**************/

$coneccion= mysqli_connect("127.0.0.1","root","", "bd_handmade");

//var_dump($coneccion);  // Imprime la variable o el array

//die(); // Detiene el código php


 
$Nombre=$_POST["Nombre_comprador"];
$Apellido=$_POST["Apellido_comprador"];
$Correo=$_POST["Correo_comprador"]; 
$Direccion=$_POST["Direccion"]; 
$Ciudad=$_POST["Ciudad"]; 







$insertar=mysqli_query($coneccion,"insert into r_compra(Nombre_comprador , Apellido_comprador,Correo_comprador,Direccion,Ciudad )values('".$Nombre."','".$Apellido."' , '".$Correo."'  ,'".$Direccion."'  ,'".$Ciudad."' )");


if($insertar==true)
{
    ?> 
    <script>
    window.location.href="http://localhost/hechoamano/compra_exitosa.php";
    </script>
<?php
}

else
{
?>
<script>
    window.location.href="http://localhost/hechoamano/compra_fracasada.php";
    </script>
<?php
}

