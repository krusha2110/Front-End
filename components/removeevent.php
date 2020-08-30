<?php
include 'DatabaseConnection.php';
session_start();
$EventId= $_GET["event_id"];

$sql1 = "Delete from activity where EventId='".$EventId."'";
$result1 = mysqli_query($conn,$sql1);
if($result1)
{
	$sql = "Delete from eventdetails where EventId='".$EventId."'";
	$result = mysqli_query($conn,$sql);
  	if($result)
	{
  		header("location: ./EventsView.php");
	}
	else{
 	 header("location: ./EventsView.php");
	}
}else
{
	$sql = "Delete from eventdetails where EventId='".$EventId."'";
	$result = mysqli_query($conn,$sql);
  	if($result)
	{
  		header("location: ./EventsView.php");
	}
	else{
 	 header("location: ./EventsView.php");
	}
}

