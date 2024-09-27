<?php
include("conexion.php"); //Verifica que la conexion se realiza correctamente 

if(isset($_POST['send'])){
    if(
        strlen($_POST['name']) >=1 &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['email']) >=1 &&
        strlen($_POST['message']) >=1 
    ){  
        // Escapando caracteres especiales para evitar inyección SQL
        $name =  mysqli_real_escape_string ($conex,trim($_POST['name']));
        $phone =  mysqli_real_escape_string($conex,trim($_POST['phone']));
        $email =  mysqli_real_escape_string($conex,trim($_POST['email']));
        $message =mysqli_real_escape_string($conex,trim($_POST['message']));

         // Consulta SQL para insertar los datos
        $consulta = "INSERT INTO datos(nombre,telefono,email,mensaje) 
        VALUE('$name','$phone','$email','$message')";

         // Ejecutando la consulta y verificando el resultado
        $resutado = mysqli_query($conex,$consulta) ;

    if ($resutado){
        echo "Datos insertados correctamente";
    }else{
        echo "<script>alert('Error al insertar los datos: " . mysqli_error($conex) . "');</script>";
    }
    }else{
        echo "<script>
                document.getElementById('mensaje').innerText = 'Por favor, complete todos los campos del formulario';
                document.getElementById('mensaje').style.color = 'red';
              </script>";
    }
}
?>