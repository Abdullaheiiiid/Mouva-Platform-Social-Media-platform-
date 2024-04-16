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
    
    if (isset($_POST['sub']) && !empty($_POST['usern'])) {

        $un = validate($_POST['usern']);

        $result = $conn->query("SELECT * FROM users WHERE `USERNAME`='$un' ");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (!(is_null($row['USERNAME']) )) {
    
                $_SESSION['UID2'] = $row['UID'];

            header("Location: profile_search.php");

            exit();
            }else{
                 header("Location: search.php?error=22 username");
            
                exit();
            }
        }else{
                
            header("Location: search.php?error=Incorect username");
            
            exit();
        }






    }else{
                
        header("Location: search.php?error=Incorect username2");
        
        exit();
    }
    ?>