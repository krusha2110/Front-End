<?php
echo '<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="sign up page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author-Krusha, Muskan" content="Project 2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/script.js"></script>
  </head>
  <body>
  <h1>
    <div class="head">
        <div id="head_center">Forgot Password?</div>
            </div>
  </h1>
  <div class = "head_content">
        <form class="form1" method="post" action="forgot.php">
            <div>
                <label for="correo"><br />Tu Correo (requerido)</label>
                <br>    
                <br>    
                <input name="email" type="email" id="email" placeholder="Tu Correo" size="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form_text" required>
                <br>
                <br>
                <br><button type="submit" value="submit" class="reg_button" id="submit">SUBMIT</button>
            </div>
        </form>
    <br>
    <br>
    </div>

</body>
<!-- body ends -->';
include 'footer.php';

echo '</html>';
?>