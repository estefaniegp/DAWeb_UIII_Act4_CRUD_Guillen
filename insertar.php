<?php
include("conexion.php");
$con=conectar();

$rfc=$_POST['rfc'];
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$correo=$_POST['correo'];


$sql="INSERT INTO registro VALUES('$rfc','$nombre','$apellidop','$apellidom','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>