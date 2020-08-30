<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="Nosotros page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <link rel="stylesheet" href="../css/ciudad.css">
  </head>
  <!-- header -->
  <header>
    <nav>
      <div class="fit-width pos_rel" id="top">
        <div class="inline h_nav">
          <img src='../assests/images/i.jpg' alt="logo" title="Genteociudad" class="h_logo">
        </div>
        <div class="inline pos_abs hc">
          <p class="hc_name">
            <a  href="./inicio.php">Inicio</a>/
            <a  href="./nosotros.php">Nosotros</a>/
            <a href="./equipos.php">Equipos</a>/
            <a href="WORDPRESS BLOG">Blog</a>/
            <a href="./contacto.php">Contacto</a>/
            <a href="./welcome_user.php"><?php echo $_SESSION["fname"]; ?></a>/
            <a href="./logout.php">Log Out </a>
          </p>
        </div>
        <div class="class_banner txt-cntr fit-width">
        <h1>LOGIN</h1>
        <p>
          <span>LOGIN</span> &#62;
          <span>LOGIN</span>
        </p>
      </div>
    </div>
</nav>
</header>
<!-- header ends -->
<!-- body starts -->
<body>
  <div>
    <div class="w_div">
      <table class="w_t1" >
        <tr>
          <td>
            <button class="w_b1" type = "submit" onclick= "window.location.href = 'activities.php';">ACTIVITIES</button>
          </td>
        </tr>
        <tr>
          <td>
            <button class="w_b1" type = "submit" onclick= "window.location.href = 'EventsDisplay.php';">EVENTS</button>
          </td>
        </tr>
      </table>
    <br>
    </div>
    <div>
      <h2 class="w_h2">Welcome to</h2>
      <img src="../assests/images/i.jpg" class="w_img">
    </div>
  </div>
<br>
<br><br>



</body>
<!-- body ends -->
  <!-- footer starts -->
<?php
 include 'footer.php';
 ?>
</html>
