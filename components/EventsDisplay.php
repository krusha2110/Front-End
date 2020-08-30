<?php
session_start();
$a = $_SESSION["loggedin"];
$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="Nosotros page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
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
            <a href="WORDPRESS BLOG" target="_blank">Blog</a>/
            <a href="./contacto.php">Contacto</a>/
            <a href="./welcome_user.php"><?php echo $_SESSION["fname"]; ?></a>/
            <a href="./logout.php">Log Out </a>
          </p>
        </div>
        <div class="class_banner txt-cntr fit-width">
        <h1>LOGIN</h1>
        <p>
          <span>LOGIN</span> &#62;
          <span>LOGIN</span> &#62;
          <span>EVENTS</span>
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
      <table class="w_t1">
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
    </div>
    <div>
<?php
  include 'DatabaseConnection.php';
  $sql = "SELECT * FROM eventdetails;";
  $result = mysqli_query($conn,$sql);
  
  $count = mysqli_num_rows($result);
  if ($count > 0) {
         // output data of each row
        echo "<div class='ev_cards'>";
         while($row = mysqli_fetch_array($result)) 
         {
            
             
              echo "<div class='ev_card'>";
                echo "<div class='ev_container'>";
                  echo "<img src='".$row['EventImage']."'class='ev_image' style='width:100%'>";
                  echo "<div class='ev_middle'>";
                    echo "<div class='ev_text'>";
                      echo"<h6>".$row["EventName"]."</h6>";
                      echo"<h4>'".$row['EventLocation']."'</h4>";
                      echo"<h5>'".$row['EventDate']."'<br>'".$row['EventTime']."'</h5>";
                    echo "</div>";
                    $url = "enroll_event.php?event_id=".$row['EventId'];
                    
                    echo"<form method='post' action='".$url."'><button class='ev_button' type = 'submit'>Enroll</button></form>";
                  echo"</div>";
                echo"</div>";
              echo"</div>";
            
          }
          echo"</div>";
        }
      

?>






    </div>
  </div>
    <br>
    <br>
    <br>

  <br><br>




</body>
<!-- body ends -->
  <!-- footer starts -->
  <?php
include 'footer.php';
 ?>
</html>
