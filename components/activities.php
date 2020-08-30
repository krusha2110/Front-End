<?php
session_start();
$a = $_SESSION["loggedin"];
$user_id = $_SESSION['user_id'];
if (isset($a)) {

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="Nosotros page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
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
          <span>ACTIVITIES</span>
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
      <table class="t_div1" border="1">
        <tr>
          <th>
          <p>EventName</p>
          </th>
          <th>
            <p>Event Location</p>
          </th>
          <th>
            <p> Event Date</p>
          </th>
          <th>
            <p>Event Time</p>
          </th>
          <th class="t_div3">
            <p>Unregister</p>
          </td>
        </tr>
        <?php
    include 'DatabaseConnection.php';
    
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. " . $conn->connect_error);
    }

    $sql = "SELECT eventdetails.EventId,eventdetails.EventName,eventdetails.EventLocation,eventdetails.EventDate,eventdetails.EventTime FROM eventdetails JOIN activity ON eventdetails.EventId=activity.EventId AND activity.UserId = ".$user_id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $EventName = $row["EventName"];
          $url = 'deleteevent.php?event_id='.$row["EventId"];
          echo "<form method='post' action='".$url."'><tr><td><br>". $row["EventName"]."<br></td>";
          echo "<td><br>". $row["EventLocation"]."<br></td>";
          echo "<td><br>". $row["EventDate"]."<br></td>";
          echo "<td><br>". $row["EventTime"]."<br></td>";
          echo "<td><form action = '".$url."' method='post'><button type='submit' >Unregister</button></form></td>";
      }
    } else {
      echo "You haven't registered in any events....";
    }

    $conn->close();
    ?>

      </table>
    </div>
  </div>
    <br>
    <br>
    <div align="center">
      <table>
        <tr>
          <td>
            <button type = "submit" class="t_b2" style="background-color: #e65c00" onclick= "window.location.href = 'EventsDisplay.php';">ADD NEW</button>
          </td>
        </tr>
      </table>
    </div>
  <br><br><br><br><br><br><br>
  <br><br>
<br><br>



</body>
<!-- body ends -->
  <!-- footer starts -->
  <?php
 include 'footer.php';
}
else
{
    echo "You are not authorized to view this page.<br> <a href='./inicio_de_sesion.php'>Back to login</a>";
}
 ?>
</html>
