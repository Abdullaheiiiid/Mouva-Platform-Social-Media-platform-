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
if(isset($_POST["submit"])){ 
  







    $status = 'error'; 
    if(!empty($_FILES["image_input"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image_input"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image_input']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
        
            // Insert image content into database
            $insert = $conn->query("UPDATE `users` SET `COVER`='$imgContent' WHERE `UID` = '$userid'"); 

        
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
// Display status message 
echo "<h1>".$statusMsg; 
header("Location: profile.php");
?>
