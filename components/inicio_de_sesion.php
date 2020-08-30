<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="sesion page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO_DE_SESION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/ciudad.css">
     <script type="text/javascript" src="../js/script.js"></script>
  </head>
  <!-- header -->
   <body>
  <div id="l_change">
  <header>
    <nav>
      <div class="fit-width pos_rel" id="top">
        <div class="inline h_nav">
          <img src='../assests/images/i.jpg ' alt="logo" title="Genteociudad" class="h_logo" >
        </div>
        <div class="inline pos_abs hc">
          <p class="hc_name">
            <a  href="./inicio.php">Inicio</a>/
            <a  href="./nosotros.php">Nosotros</a>/
            <a href="./equipos.php">Equipos</a>/
            <a href="WORDPRESS BLOG" target="_blank">Blog</a>/
            <a href="./contacto.php">Contacto</a>/
            <a class="active" href="javascript:openDiv()">Inicio de Sesion</a>/
            <a href="./sign_up.php">Sign Up</a>
          </p>
        </div>
      </div>
      </nav>
  </header>
  <!-- header ends -->
  <!-- body starts -->
   <div class="l_bgfade">
    <div class="l_cover">
        <div class="l_cover1">
            <br><br><br>
            <p class= "l_ptop">
              <span class="l_coverh active"> GENTE </span>
              <br>
            <i>
              <span class="l_coverhs">Y CIUDAD </span>
            </i> 
            <br>
            </p>
            <p class="l_ic">
            Buscamos marcar un punto de partida para la transformación de nuestras<br>
            dificultades y diferenciasencimientosfirmes que, desde las ciudades,<br>
            requieren nuestros países latinoamericanos para convertirse en los mejores<br>
            lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino<br>
            por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de<br>
            de vida y asegurar los derechos de las futures generaciones.<br>
            </p>
        </div>
    </div>
</div>
</div>
<div class="l_popup" id ="l_popup">
  <form id="form1" action="./login.php" method="POST">
    <h2>Inicio de 
      <span class="active">
      <i>Sesion</i>  
      </span><button style="float: right; border:none; background-color:white; " onclick="return closeDiv()"><i class="fa fa-times" aria-hidden="true" ></i></button></h2>
      <a id = "l_forgot1" href ="./sign_up.php">New User ?</a>
    <br>
    <hr class="l_hrform">
    <div class="l_fcontainer">
        <label for="name">Correo</label>
        <input type="email" placeholder="Tu Correo" name="email" class="l_finput" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"required>
        <br>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Tu contraseña" name="psw" class="l_finput" onchange="return checkPsw()" required>
        <br>
        <hr class="l_hrform">
        <br>
        <a id = "l_forgot" href ="./forgotpass.php">forgot password..?</a>
        <br>
        <br>
        <button type="submit" class="l_button"> ENVIAR</button>
    </div>
  </form>
  </div>

</body>
<!-- body ends -->
</html>
