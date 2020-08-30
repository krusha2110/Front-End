<?php
include 'DatabaseConnection.php';
session_start();

$path="../assests/images/";
$name = $_FILES['eimageupload']['name'];//Name of the File
$temp = $_FILES['eimageupload']['tmp_name'];
$path_upload = $path . $name;
if(move_uploaded_file($temp, $path . $name)){
    echo "success";
}else{
    echo "failed";
}
$eid = $_POST['eid'];
$ename = $_POST['ename'];
$edate = $_POST['edate'];
$estarttime = $_POST['estarttime'];
$elocation = $_POST['elocation'];

$sql = "UPDATE eventdetails SET EventName='".$ename."', EventLocation= '".$elocation."', EventDate='".$edate."', EventTime='".$estarttime."', EventImage='".$path_upload."' WHERE EventId = '".$eid."'";

$result = mysqli_query($conn,$sql);


if($result)
{
  header("location: ./EventsView.php");
}
else{

  header("location: ./EventsView.php");

}


?>
