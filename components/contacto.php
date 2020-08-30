<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="Contacto page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contacto </title>
    <link rel="stylesheet" href="../css/ciudad.css">
     <script type="text/javascript" src="../js/script.js"></script>
  <!-- header -->
  <?php
  include 'header.php';

  ?>
       <div class="class_banner txt-cntr fit-width">
        <h1>Contact US</h1>
        <p>
          <span>HOME</span> &#62;
          <span>CONTACT US</span>
        </p>
      </div>
    </nav>
  </header>
  <!-- Header Ends -->
  <!-- body starts  -->
<body>
    <div class="c_main fit-width txt-cntr" id="wrapper">
      <div class="c_block1">
        <h1>
          <span class="flt-left">NUESTRAS </span> 
          <span class="c_link">&nbsp;REDES</span>
          <br>
          <span  class="c_link"
             style="padding: 1% 0px 0 0%;">SOCIALES</span>
          <br>
        </h1>
        <hr class= "c_hrl">
        <br>
        <br>
        <table align="center" style="opacity: 0.7;">
          <tr>
            <td>
              <br>
              <a href="https://www.instagram.com/genteyciudadorg/">
              <img class="c_mwidth" src="../assests/images/instagram.png" title="Instagram"></a>
              <br>
              <span>@genteyciudadorg</span>
              <br>
              <br>
            </td>
            <td>
               <a href="https://twitter.com/genteyciudadorg">
              <img class="c_mwidth" src="../assests/images/twitter.png" title="Twitter"></a>
              <br>
              <span>@genteyciudadorg</span>
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <img src="../assests/images/phone.png" class="c_mwidth" title="Phone">
              <br>
              <br>
              <span>001 346 714 3892</span>
              <br>
              <span>058 414 8225881</span>
              <br>
              <span>056 933948007</span>
              <br>
              <br>
            </td>
            <td>
              <a href="mailto:info@genteyciudad.org">
              <img src="../assests/images/mail.png" class="c_mwidth" title="Mail"></a>
              <br>
              <span>info@genteyciudad.org</span>
              <br>
              <br>
            </td>
          </tr>
        </table>
      </div>
      <div style="width:40%;">
        <h1>
          <span class="flt-left">FORMULARIO DE</span>
          <br>    
          <span style="font-family:montserratItalic;color: #e65c00;float: left !important;
            ">CONTACTO</span>
          <br>    
        </h1>
        <hr class= "c_hrr">
        <br>
        <br>
        <form method="POST" action="contact.php">
          <fieldset class="c_info">
            <label>Tu Nombre(requerido)</label>
            <br>
            <input type="text" id="fname" name="fname" placeholder="Tu Nombre" size="50" pattern="[A-Za-z ]{2,}" required>
            <br>
            <br>
            <label>Tu Correo(requerido)</label>
            <br>
            <input type="email" id="fname" name="email" placeholder="Tu Correo" ize="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required >
            <br>
            <br>
            <br>
            <label>Asunto</label>
            <br>
            <input type="text" id="fname" name="heading" placeholder="Asunto" size="50" pattern=".{2,}" required>
            <br>
            <br>
            <br>
            <label>Asunto</label>
            <br>
            <textarea cols="37" rows="11" id="fname" name="describe"  placeholder="" maxlength="50" pattern=".{2,}" required></textarea>
            <br>
            <br>
          </fieldset>
          <button type="submit" class="button-Envar">ENVAR</button>
        </form>
      </div>
    </div>
  </body>
  <!-- *************** Body Ends ****************** -->
   <!-- footer starts -->
  <footer>
   <div class="f">
      <h2 class="txt-cntr ltr-spac">Escribenos, te invitamos a brindar lo mejor de ti para el bien
        <br> comun, <span class="active">queremos conocer acerca de tus ideas para mejorar.</span>
      </h2>
    </div>
       <div class="hex-dark">
          <div class= "f_sub">
          <div  class="f_icons">
        <a href="mailto:info@genteyciudad.org"><img style="height:20px; width:20px;" id="hello" src="../assests/images/mail.png" title="Mail"></a>
        </div>
        <div   class="f_icons">
            <a href="https://twitter.com/genteyciudadorg"><img style="height:20px; width:20px;"id="hello" src="../assests/images/twitter.png" title="Twitter"></a>
            </div>
            <div   class="f_icons">
             <a href="https://www.instagram.com/genteyciudadorg/"><img style="height:20px; width:20px;" id="hello" src="../assests/images/instagram.png" title="Instagram"></a>
                </div>
    </div>
      </div>
    <div class="f_bottom">
        <span class="active"><a href="http://www.diazapps.com/">DiazApps</a></span> &copy;&nbsp;
        <span style="opacity: 0.6;">2020 All Rights Reserved</span>
    </div>
  </footer>
      <div class="scroll_top"> 
      <a href="#top">&and;</a>
    </div> 
</html>
