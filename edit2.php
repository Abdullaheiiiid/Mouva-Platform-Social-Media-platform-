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

    function validate($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
         if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['userName']) 
              && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['submit']))
              {
           $query="UPDATE`users`SET FNAME='$_POST[firstName]',LNAME='$_POST[lastName]',EMAIL='$_POST[email]',USERNAME='$_POST[userName]',PASSWORD='$_POST[password]' where UID ='$userid'";
           
           $query_run=mysqli_query($conn,$query);

             header("Location: profile.php");
                
              exit();

        }
    
    
        ?>

