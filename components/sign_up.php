
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="sign up page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script type="text/javascript" src="../js/script.js"></script>
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
            <a href="./nosotros.php">Nosotros</a>/
                  <a href="./equipos.php">Equipos</a>/
                  <a href="WORDPRESS BLOG" >Blog</a>/
                  <a   href="./contacto.php">Contacto</a>/
                  <a href="./inicio_de_sesion.php">Inicio de Sesion</a>/
                  <a class="active" href="./sign_up.php">Sign Up</a>
          </p>
        </div>
      </div>
       <div class="class_banner txt-cntr fit-width">
        <h1>REGISTER</h1>
        <p> 
          <span>SIGN UP</span> &#62;
          <span>GENTE CUIDAD</span>
        </p>
      </div>
    </nav>
  </header>  <!--  Header Ends  -->
   <!--   Body   -->
   <body>
   <form id = "form1" name = "form1" action="./Register.php" method="POST" >
      <fieldset class="reg_form">
      <legend>REGISTRATION FORM</legend>
      <br><label for="fname">First Name</label><br>
          <input type="text" placeholder="Enter First Name" name="fname" onchange="return letters()" required class="form_text">
          <br>
          <br>
          <label for="lname">Last Name</label><br>
          <input type="text" placeholder="Enter Last Name" name="lname" onchange="return letters()" required class="form_text">
          <br>
          <br>
          <label for="gender">Gender</label><br>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label><br>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label><br>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label>
          <br><br>
          <label for="email">Email</label><br>
          <input type="email" placeholder="Enter Email" name="email" required class="form_text">
          <br><br>
          <label for="psw">Password</label><br>
          <input type="password" placeholder="Enter Password" name="psw" onchange="return checkPsw()" required class="form_text">
          <br><br>
          <label for="psw2">Confirm Password</label><br>
          <input type="password" placeholder="Confirm Password" name="psw2" required class="form_text" onchange="return confirmPsw()" >
          <br><br><br>
        <button type="submit" value="submit" class="reg_button" id="submit">SUBMIT</button>
        <button type="reset" onclick="newSet()" class="reg_button1">RESET</button>
      </fieldset>
    
  </form>
  
</body>
  <!--  Body Ends  -->
  
<!-- Footer -->
<footer>
    <span style="clear:both"></span>
        <div class="f">
            <div class="f_search">
                <h2>
                    <span>Contactate con</span>
                    &nbsp;<span class="active">Nosotros</span>
                    
                    <input type="text" placeholder="Email" class="ip_f">
                    <button class="f_button">ENVAR</button>
                </h2>
            </div>
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