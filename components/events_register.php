
<?php
include 'DatabaseConnection.php';

ini_set('error_report',0);
ini_set('display_error',0);
session_start();

$path="../assests/images/";
$name = $_FILES['eimageupload']['name'];//Name of the File
$temp = $_FILES['eimageupload']['tmp_name'];
$path_upload = $path . $name;
if(move_uploaded_file($temp, $path . $name)){
   // echo "success";
}else{
   // echo "failed";
}

$ename = $_POST['ename'];
$edate = $_POST['edate_o'];


$estarttime = $_POST['estarttime'];
$elocation = $_POST['elocation'];

$sql = "INSERT INTO eventdetails (EventName, EventLocation, EventDate, EventTime, EventImage) VALUES( '".$ename."','".$elocation."','".$edate."','".$estarttime."','".$path_upload."'); ";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($result)
{
   echo "<script>window.location.href='./EventsView.php';</script>";
    
}
else
{
    echo "<script>window.location.href='./regsiterevent.php';</script>";
}
   



?>
