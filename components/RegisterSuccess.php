<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta   http-equiv="refresh"
content="3; url = ./inicio_de_sesion.php">
    <title>Success Page</title>
    <link rel="stylesheet" href="../css/ciudad.css">
  </head>
  
  <header>
    <nav>
      <div class="class_banner txt-cntr width">
        <h1>Registration</h1>
        <p>
          <span>HOME</span> &#62;
          <span>Success</span>
        </p>
      </div>
    </nav>
  </header>
  
   <body>
	
	<center>
	<p>
		<span> Welcome <?php echo $_GET['name']; ?><br><br>You have successfully registered Now go to your mailbox and check for the username.</span><br><br><br>
	</p>
	</center>
</body>
  
<?php
 include 'footer.php';
 ?>
</html>

