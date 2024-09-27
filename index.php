<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <title>clinica</title>
</head>
<body>
    <header class="header">   

   <div class="menu container">
        <a href="#" class="logo">logo</a>
        <input type="checkbox" id="menu">
        <label for="menu">
            <span class="material-symbols-outlined">
               menu</span>
            <img src="xsa" calss="menu-icono" alt="menu"> 
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="#">inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
   </div>

   <div class="header-content container">
    <div class="header-txt">
        <h1>Medical center</h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Ipsa ducimus tempore adipisci velit sint delectus accusamus laudantium nisi saepe 
            explicabo. Rem nam repellendus repellat eligendi! Sit dolorem facere quo nostrum?
        </p>
        <a href="#" class="btn-1">iformacion</a>
    </div>
        <div class="header-img">
            <img src="#" alt="">
        </div>
   </div>

 </header>
<section class="about container">
    <div class="about-img">
        <img src="#" alt="">
    </div>
    <div class="about-txt">
        <h2>Nosotros</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit fuga, eius quam delectus corporis provident, veritatis odio asperiores sint sapiente dolore nihil cupiditate laudantium harum esse illo! Sequi, ex iure?</p>
    </div><br>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum provident debitis dolorem iure mollitia quam eos iste sit quod, soluta dicta ad quidem placeat atque, quisquam deleniti eligendi accusamus hic.</p>
</section>

<main class="servicios">
    <h2>Servicios</h2>
    <div class="servicios-content container">
        <div class="servicio-1">
            <i class="fa-sharp fa-solid fa-hospital-user"></i>
            <h3>pediatria</h3>
        </div>

        <div class="servicio-1">
            <i class="fa-sharp fa-solid fa-hospital-user"></i>
            <h3>dematologia</h3>
        </div>

        <div class="servicio-1">
            <i class="fa-sharp fa-solid fa-hospital-user"></i>
            <h3>cardiologia</h3>
        </div>
    </div>
</main>
<section class="formulario container">
    
    <form method="post" autocomplete="off">
        <div id="mensaje"></div>
        <h2>agenda consulta</h2>    

        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Noombre y apellido">
                <i class="#user"></i>
            </div>

            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="phone" placeholder="telefono">
                    <i class="#user"></i>
                </div>

                <div class="input-group">
                    <div class="input-container">
                        <input type="text" name="email" placeholder="correo">
                        <i class="#user"></i>
                    </div>

                    <div class="input-group">
                        <div class="input-container">
                            <textarea name="message" placeholder="detalles de la consulta"></textarea>
                        </div>
                        <input type="submit" name="send" class="btn" onclick="myFunction()">
            
        </div>
    </form>
</section>
<footer class="footer">
    <div class="footer-content container">
        <a href="#" class="logo">logo</a>
    </div>
    <div class="link">
        <ul>
           <li><a href="#">inicio</a></li>
           <li><a href="#">Nosotros</a></li>
           <li><a href="#">servicio</a></li>
           <li><a href="#">contacto</a></li>
        </ul>
    </div>
</footer>

 <?php 
    include("send.php");
?> 
<script>
    function myFunction(){
        window.location.href="http://locahost/web-clinica"
    }
</script>
</body>
</html>