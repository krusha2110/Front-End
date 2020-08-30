<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="Event Register page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Register</title>
    <link rel="stylesheet" href="../css/ciudad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <?php include 'header.php';
  ?>
            <div class="class_banner txt-cntr fit-width">
        <h1>EVENTS</h1>
        <p>
          <span>LOGIN</span> &#62;
          <span>EVENTS</span> &#62;
          <span>EVENTS REGISTER</span>
        </p>
      </div>

    </nav>
  </header>

  <body>
    <div class="er_container" style="padding: 5%;">
        <form method="POST" action = "events_register.php" enctype="multipart/form-data">
          <fieldset class="er_form">
          <h1>Create Event FORM</h1>
          <br>
          <label for="ename">Event Name</label><br>
            <input type="text" placeholder="Event Name" name="ename" required class="er_text">
            <br><br>
            <label for="edate">Event Date</label><br>
            <input type="date" class="er_datepicker" name="edate_o">
            <br><br>
            <label for="estarttime">Start Event Time</label><br>
            <input type="time" name="estarttime" required class="er_text">
            <br><br>
            <label for="elocation">Event Location</label><br>
            <input type="text" placeholder="Address of Event" name="elocation" required class="er_text">  
            <br><br>
            <label for="eimageupload">Image Upload</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" placeholder="FileUpload" name="eimageupload" id = "eimageupload" required > 
            <br><br><br><br>
            <button type="submit" class="er_button">SUBMIT</button>
            &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
            <button type="button" class="er_button">RESET</button>
          </fieldset>
        </form>
      </div>
  </body>


  <!-- Footer -->
  <?php include 'footer.php'; ?>
</html>
