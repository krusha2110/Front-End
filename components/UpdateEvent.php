<?php
include 'DatabaseConnection.php';
$event_id = $_GET['event_id'];
$sql = "SELECT * FROM eventdetails WHERE EventId=".$event_id."";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="Event Register page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Update</title>
    <link rel="stylesheet" href="../css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
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
                  <a  href="./sign_up.html">Sign Up</a>
          </p>
        </div>
      </div>
            <div class="class_banner txt-cntr fit-width">
        <h1>EVENTS</h1>
        <p>
          <span>LOGIN</span> &#62;
          <span>EVENTS</span> &#62;
          <span>UPDATE EVENT</span>
        </p>
      </div>

    </nav>
  </header>

  <body>
    <div class="er_container" style="padding: 5%;">
        <form method="POST" action = "events_update.php" enctype="multipart/form-data">
          <fieldset class="er_form">
          <h1>Create Event FORM</h1>
          <br>
          <label for="ename">Event Name</label><br>
            <input type="hidden" name="eid" value= '<?php echo $event_id; ?>'>
            <input type="text" placeholder="Event Name" name="ename" required class="er_text" value='<?php echo $row["EventName"]; ?>'>
            <br><br>
            <label for="edate">Event Date</label><br>
            <input type="date"  class="er_datepicker" name="edate" value='<?php echo $row["EventDate"]; ?>'>
            <br><br>
            <label for="estarttime">Start Event Time</label><br>
            <input type="time" name="estarttime" required class="er_text" value='<?php echo $row["EventTime"]; ?>'>
            <br><br>
            <label for="elocation">Event Location</label><br>
            <input type="text" placeholder="Address of Event" name="elocation" required class="er_text" value='<?php echo $row["EventLocation"]; ?>'>  
            <br><br>
            <label for="eimageupload">Image Upload</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            <img src='<?php echo $row["EventImage"]; ?>' height="30%" width="30%"><br>
            <input type="file" placeholder="FileUpload" name="eimageupload" id = "eimageupload" required  > 
            <br><br><br><br>
            <button type="submit" class="er_button">SUBMIT</button>
            &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
            <button type="button" class="er_button">RESET</button>
          </fieldset>
        </form>
      </div>
  </body>


  <!-- Footer -->
 <?php
 include 'footer.php';
 ?>
</html>
