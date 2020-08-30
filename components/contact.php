<?php
include 'DatabaseConnection.php';
$senderName = $conn->real_escape_string($_REQUEST['fname']);
$email = $conn->real_escape_string($_REQUEST['email']);
$subject = $conn->real_escape_string($_REQUEST['heading']);
$text = $conn->real_escape_string($_REQUEST['describe']);

mail('mail-id',$subject,$senderName.$email.$text);
echo '<script>location.href="./contacto.php";</script>';
?>