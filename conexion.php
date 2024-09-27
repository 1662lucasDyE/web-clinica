<?php
$conex = mysqli_connect("localhost","root","","formulario");

if(!$conex){
    die("error de conexion: ".mysqli_connect_error());
}

?>