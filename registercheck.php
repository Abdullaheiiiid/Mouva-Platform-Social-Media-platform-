<?php
    session_start();
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
    
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['userName']) 
        && isset($_POST['email']) && isset($_POST['password'])) {

        $fName = validate($_POST['firstName']);
        $lName = validate($_POST['lastName']);
        $mail = validate($_POST['email']);
        $username = validate($_POST['userName']);
        $password = validate($_POST['password']);
            
    
            $result = $conn->query("SELECT * FROM users WHERE `EMAIL`='$mail' AND `USERNAME`='$username'");
            
            if ($result->num_rows != 0) {
                    header("Location: registration.php?error=member already exist");
                    exit();
            }else{ 
                
                    // Insert image content into database
                    $insert = $conn->query("INSERT INTO `users`(`FNAME`, `LNAME`, `USERNAME`, `EMAIL`, `PASSWORD`)
                                        VALUES ('$fName','$lName','$username','$mail','$password')"); 

                
                    if($insert){ 
                        $result = $conn->query("SELECT * FROM users WHERE `EMAIL`='$mail' AND `PASSWORD`='$password'");
            
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                
                            if ($row['PASSWORD'] == $password) {
                
                                echo "Logged in!";
                
                                $_SESSION['UID'] = $row['UID'];
                
                                header("Location: profilepic.php");
                
                                exit();
                
                            }else{ 
                                $statusMsg = "registeration failed, please try again."; 
                            } 
                
            }
                     
                }
        }
            
    
    }
    
    else{
    
        header("registration: Sign.php");
    
        exit();
    
    }
?>
