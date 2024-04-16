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
    
    if (isset($_POST['email']) && isset($_POST['password'])) {

    
        $mail = validate($_POST['email']);
    
        $pass = validate($_POST['password']);
            
    
            $result = $conn->query("SELECT * FROM users WHERE `EMAIL`='$mail' AND `PASSWORD`='$pass'");
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
    
                if ($row['PASSWORD'] == $pass) {
    
                    echo "Logged in!";
    
                    $_SESSION['UID'] = $row['UID'];
    
                    header("Location: profile.php");
    
                    exit();
    
                }else{
    
                    header("Location: Sign.php?error=Incorect Email or password");
    
                    exit();
    
                }
    
            }else{
                
                header("Location: Sign.php?error=Incorect Email or password");
                
                exit();
            }
    
        }
    
    else{
    
        header("Location: Sign.php");
    
        exit();
    
    }
?>
