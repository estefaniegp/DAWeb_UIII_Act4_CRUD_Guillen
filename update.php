<?php

include("conexion.php");
$con=conectar();

$rfc=$_POST['rfc'];
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$correo=$_POST['correo'];

$sql="UPDATE registro SET rfc='$rfc',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo' WHERE rfc='$rfc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>