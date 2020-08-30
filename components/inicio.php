<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="inicio page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <!-- header -->
  <?php
session_start();
$a = $_SESSION["loggedin"];
echo $a;
if(isset($a))
{
	echo'<header>
    <nav>
      <div class="fit-width pos_rel" id="top">
        <div class="inline h_nav">
          <img src="../assests/images/i.jpg" alt="logo" title="Genteociudad" class="h_logo">
        </div>
        <div class="inline pos_abs hc">
          <p class="hc_name">
            <a  href="./inicio.php">Inicio</a>/
            <a  href="./nosotros.php">Nosotros</a>/
            <a href="./equipos.php">Equipos</a>/
            <a href="WORDPRESS BLOG">Blog</a>/
            <a href="./contacto.php">Contacto</a>/
           
            <a href="./welcome_user.php">'.  $_SESSION["fname"].'</a>/
            <a href="./logout.php">Log Out </a>
          </p>
        </div>';
        
}
else
{
	echo '<header>
    <nav>
      <div class="fit-width pos_rel" id="top">
        <div class="inline h_nav">
          <img src="../assests/images/i.jpg" alt="logo" title="Genteociudad" class="h_logo">
        </div>
        <div class="inline pos_abs hc">
          <p class="hc_name">
            <a href="./inicio.php">Inicio</a>/
            <a href="./nosotros.php">Nosotros</a>/
                  <a href="./equipos.php">Equipos</a>/
                  <a href="WORDPRESS BLOG" >Blog</a>/
                  <a   href="./contacto.php">Contacto</a>/
                  <a href="./inicio_de_sesion.php">Inicio de Sesion</a>/
                  <a href="./sign_up.php">Sign Up</a>
          </p>
        </div>
      </div>
    ';
}
?>
</nav>
</header>


  <!-- Header Ends -->
  <!-- inicio starts -->
  <body>
  <div>
    <div class="i_back">
        <div class="i_back1">
            <br><br><br>
            <p class="i_p"><span class="orange_h1"> GENTE </span><br>
            <i><span class="i_h">Y CIUDAD </span></i> <br>
            </p>
            <p class="i_text1" >
            Buscamos marcar un punto de partida para la transformación de nuestras
            dificultades y diferenciasencimientosfirmes que, desde las ciudades,
            requieren nuestros países latinoamericanos para convertirse en los mejores
            lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino
            por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de
            de vida y asegurar los derechos de las futures generaciones.
            </p>
        </div>
    </div>
</div>
<div>    
    <table class="i_obv" align="center">
        <tr >
            <td align="center"> <h1><b> OBJETIVOS </b></h1>
            Realizar investigaciones, estudios y propuestas legislativas, relacionados con la gestión de los <br> gobierno locales para el desarrollo sostenible.<br>
            Formular proyectos para promover la participación ciudadana en iniciativas locales para la <br> sostenibilidad. <br>
            Desarrollar programas de capacitación en las áreas de participación ciudadana local y gobierno <br> abierto para la sostenibilidad. <br>
            Promover iniciativas de responsabilidad social y voluntariado, como espacios de participación <br> ciudadana <br>
            Implementar campañas de sensibilización para motivar en la audiencia el ejercicio activo de la <br> ciudadanía como eje fundamental para la transformación de las ciudades.
            </td>

        </tr>

      </table>
</div>
<br><br>
<div>    
    <table class="i_nuestros" align="center" width="80%">
        <tr>
            <td align="center" colspan="3"> <h1><b> Nuestros  <font color="#FF7733">Valores </font> </b></h1>
                
            </td>
        </tr>
        <tr>
            <td align="left"> <b> <font class="i_ca">CA</font>LIDAD </b> <br>
                <br> Es la práctica de los integrantes de Gente & <br> Ciudad que fomenta una mejora continua <br> para alcanzar la misión de la organización.
            </td>
            <td align="left"> <b> <font class="i_ca"> CO</font>NFIANZA </b> <br>
                <br> Es la seguridad que Gente & Ciudad genera <br> a través de sus actos.                
            </td>
            <td align="left"> <b> <font class="i_ca"> CO</font>HERENCIA </b> <br>
                <br> Todas las actuaciones de Gente & Ciudad <br> estarán en consonancia con sus valores <br> institucionales.
            </td>
        </tr>
        <tr>
            <td align="left"> <b> <font class="i_ca"> CO</font>MPROMISO </b> <br>
                <br> Los integrantes de Gente & Ciudad asumen <br> como propio el cumplimiento de las <br> obligaciones de la institución.
            </td>
            <td align="left"> <b> <font class="i_ca">CO</font>OPERACIÓN </b> <br>
                <br> En Gente & Ciudad se promueve la suma de <br> fuerzas para lograr objetivos compartidos.
            </td>
            <td align="left"> <b> <font class="i_ca">TR</font>ANSPARENCIA </b> <br>
                <br> Es la cualidad que caracteriza y promueve <br> Gente & Ciudad que permite conocer <br> claramente nuestro planteamientos y <br> acciones.
            </td>
        </tr>

      </table>
</div>

<br><br><br>


<div style="display: -webkit-inline-box;width:100%;">
<div style="width:50%;" class="i_s">
  <div class="i">
    <table class="i_table" style="border-collapse: collapse;">
      <tr>
        <th style="padding-left: 8%; padding-right: 5%;">
          <i class="fa fa-microphone" style="color: white; font-size: 25px;"></i><br>
          <p align="center" style="color: white;">18 FOROS</p>
        </th>
        <th style="border-bottom: 1px solid #ffffff; border-left: 1px solid #ffffff;">
          <i class="fa fa-users" aria-hidden="true" style="color: white; font-size: 20px;"></i><br>
          <p align="center" style="color: white;">50+ PASTICIPANTES</p>
        </th>

      </tr>

      <tr>
        <th style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
          <br><i class="fa fa-book" aria-hidden="true" style="color: white; font-size: 25px;"></i><br>
          <p align="center" style="color: white;">30 EVENTOS</p>
        </th>
        <th>
          <br><i class="fa fa-calendar" aria-hidden="true" style="color: white; font-size: 25px;"></i><br>
          <p align="center" style="color: white;">3 EVENTOS FOR DIAS</p>
        </th> 
      </tr>
    </table>
  </div>
</div>

<div style="width:50%;" class="i_s1">
  

    <td>
                <p> <font class="i_registrate">Registrate con</font><font class="i_noso"> Nosotros </font> <br>
                <i class="check"> <font class="i_para"> Para estas informado de nuestas actividades y eventos </font></i></p>
        <form class="i_reg">
            
        <input class="i_reg2" type="text" placeholder="Nombre Completo">
        
        <input class="i_reg2" type="text" placeholder="Correo">
            <br>
        <input  class="i_reg2" type="text" placeholder="Telefono">

                <select class="i_reg4" id="reg">
                  <option value="HELLO">Cuidad de Origen</option>
                </select>
                <br>
                  <input class="i_reg3" type="button" value="REGISTRAR AHORA"/>
        </form>
            </td>

</div>
</div>
<div class="i_s2">
<div>
  <br><br><p align="center" style="PADDING: 0;MARGIN: 0;"><h2 align="center">NUESTROS ALIADOS <font class="i_estra"> <i>ESTRATEGICOS</i></font></h2></p>
  <img src="../assests/images/image3.jpg" height="70px" width="13%" class="i_s3">
  <img src="../assests/images/i.jpg" height="70px" width="13%" class="i_s3">
  <p>&nbsp;</p>
</div>

</div>
</div>
<div class="i_blog2">
    Nuestros <i>Blog</i>
    <p>Esta sección esta pensada para integrar a los ciudadanos y poder tener un feedback directo con nuestra comunidad.</p>
  </div>
  <div style="height:100%;">
    <iframe src="WORDPRESS BLOG" style="margin-left: 20%; width:60%;"></iframe>  
  </div><br>
  <br>
  <br>
  <br>

</body>

<!-- Body Ends -->
<!-- Footer -->
<?php
 include 'footer.php';
 ?>
</html>