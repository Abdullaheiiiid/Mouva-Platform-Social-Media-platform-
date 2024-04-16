<?php
    session_start();
    $userid=$_SESSION['UID'];
?>
<?php

$username = "root";
$password = "";
$servername = "localhost";
$dbname = "portofolio"; 

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$status = $statusMsg = ''; 
if(isset($_POST["subx"])){ 
    $cap =$_POST['caption3'];






    $sql = "UPDATE `users` SET `CAPTION`='$cap' WHERE `UID`='$userid'";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    header("Location: profile.php");
}