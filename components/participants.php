<?php
session_start();
// $a = $_SESSION["loggedin"];
$user_id = $_SESSION['user_id'];
// if (isset($a)) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="Nosotros page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants</title>
    <link rel="stylesheet" href="../css/ciudad.css">
  </head>
  <!-- header -->
 <?php include 'header.php'; ?>

        <div class="class_banner txt-cntr fit-width">
        <h1>LOGIN</h1>
        <p>
          <span>LOGIN</span> &#62;
          <span>LOGIN</span> &#62;
          <span>PARTICIPANTS</span>
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
            <button class="w_b1" type = "submit" onclick= "window.location.href = 'EventsView.php';">EVENTS</button>
          </td>
        </tr>
        <tr>
          <td>
            <button class="w_b1" type = "submit" onclick= "window.location.href = 'participants.php';">PARTICIPANTS</button> 
          </td>
        </tr>
      </table>
    </div>
    <div style="margin-left: 30%;">
      
<?php
  include 'DatabaseConnection.php';
  $sql1 = "SELECT EventId FROM eventdetails";
  $result1 = mysqli_query($conn,$sql1);
  $array_event = array();
  while($row1 = mysqli_fetch_array($result1))
  {
    array_push($array_event,$row1['EventId']);
    
  }
 
  foreach ($array_event as $value)
  {
    
    $sql = "SELECT DISTINCT eventdetails.EventId,  userinformation.UserId,userinformation.FirstName,userinformation.LastName,userinformation.EmailId,eventdetails.EventName FROM userinformation JOIN activity JOIN eventdetails ON  eventdetails.EventId=activity.EventId AND eventdetails.EventId = ".$value;
  
    $result = $conn->query($sql);
    $row2 = $result->fetch_assoc();
    
    if (mysqli_num_rows($result) > 0) 
    {
      
      echo '<div><table class="t_div1" border="1"style="margin-bottom:5%;" >
      <tr><td colspan="4" style="font-weight:bold;"><br>'.$row2['EventName'].'</td></tr>
      <tr><th><p>FirstName</p></th><th><p>LastName</p></th><th><p> EmailId</p></th><th class="t_div3"><p>Unregister</p></td></tr>';
      $finalresult = mysqli_query($conn, $sql);
      while($finalrow = mysqli_fetch_array($finalresult)) 
      {  
        
        $url = 'removeparticipant.php?event_id='.$finalrow["EventId"].'&user_id='.$finalrow["UserId"] ;
        echo "<tr class='t_div3'><td><br>". $finalrow["FirstName"]."<br></td>";
        echo "<td><br>". $finalrow["LastName"]."<br></td>";
        echo "<td><br>". $finalrow["EmailId"]."<br></td>";
        echo "<td><form action = '".$url."' method='post'><button type='submit' >DELETE</button></form></td></tr>"; 
      }
      echo '</table></div>';
    } 
  }
  $conn->close();
?>

      
    </div>
  </div>
    <br>
    <br>
    <br><br><br><br><br><br><br>
  <br><br>
<br><br>



</body>
<!-- body ends -->
  <!-- footer starts -->
  <br><br><br><br>

</html>
