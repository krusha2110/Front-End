<?php
$msg ="Hello! \n Thanyou for Contacting Us...! \n Let us know how can we help you!";
echo'<footer>
    <span style="clear:both"></span>
        <div class="f">
            <div class="f_search">
                <h2><form method="post">
                    <span>Contactate con</span>
                    &nbsp;<span class="active">Nosotros</span>
                    
                    <input type="text" placeholder="Email" name="Email" class="ip_f" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <button class="f_button" name="submit" type="submit" onclick"'.mail($_POST['Email'],"Thankyou for contacting Us",$msg).'">ENVAR</button> </form>
                </h2>
            </div>
        </div>
      <div class="hex-dark">
          <div class= "f_sub">
          <div  class="f_icons">
        <a href="mailto:info@genteyciudad.org"><img style="height:20px; width:20px;"id="hello" src="../assests/images/mail.png" title="Mail"></a>
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
    </div>';
?>

