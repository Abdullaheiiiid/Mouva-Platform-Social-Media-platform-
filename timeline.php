<!DOCTYPE html>
<!--Main Navigation-->
<head>
  <title>Timeline</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="shortcut icon" type="image/x-icon" href="icn/MOUVA.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Comfortaa:wght@400;500;600&display=swap" rel="stylesheet"></head>
<?php
  session_start();
  $userid=$_SESSION['UID'];
?>

<nav class="navbar navbar-expand-sm fixed-top navbar-scroll p-0" id="navbar">
        <div class="container-fluid pt-1 pb-1">
          <a class="navbar-brand m-0" href="timeline.php">
            <img src="icn/MOUVA.png" alt="" width="50" height="45" id="img">
            
          </a>
          <div>
    
          <button class="navbar-toggler ps-0"  style=" background: transparent;  border: 0;" type="button" data-toggle="collapse" data-target="navbarCollapse">
            <a class="nav-link" style="padding-left:3px; padding-right: 3px;" id="navlinkn" role="button" >
              <img id="menuu" src="icn/nav/menu.png" alt="" width="40" height="40" onclick="min();">
          </a>
          </button>
          <div class="men " style="min-width: 0; min-height: 0; justify-content: start; justify-items: start;">
            <ul class="user-list2 file d-flex " style="justify-content: start;">
      
              <li>
                <a href="timeline.php">
                <input type="submit" style="display: none;" id="submit1">
                </a>
                <label for="submit1" style="display: flex; ">
                  <span class="material-symbols-outlined">
                    home
                    </span> &nbsp;
                  Home
                  <span class="material-symbols-outlined">
                    chevron_right
                    </span>
                </label>
              </li>
              <li style="margin-top:70px ;">
                <a href="about us1.php">
                <input type="submit" style="display: none;" id="submit2">
                </a>
                <label for="submit2" style="display: flex;">
                  <span class="material-symbols-outlined">
                    groups
                    </span> &nbsp;
                  About Us
                  <span class="material-symbols-outlined">
                    chevron_right
                    </span>
                </label>
              </li>
              <li style="margin-top:140px ;">
                <a href="search.php">
                <input type="submit" style="display: none;" id="submit3">
                </a>
                <label for="submit3" style="display: flex;">
                  <span class="material-symbols-outlined">
                    search
                    </span> &nbsp;
                  Search
                  <span class="material-symbols-outlined">
                    chevron_right
                    </span>
                </label>
              </li>
              
            </ul>
          </div>
          </div>
          <div class="collapse navbar-collapse" style=" justify-content: space-between;" id="navbarCollapse">
            <ul>
            <div class="navbar-nav  mt-3">
              <li class="nav-item active">
                <a class="nav-link" id="navlink1" aria-current="page" href="timeline.php">Home</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="navlink2"
                  href="about us1.php"
    
                  >About Us</a
                  >
              </li>
                
              </ul>
          <ul class="navbar-nav flex-row align-items-center">
            <li class="nav-item">
              <a class="nav-link" id="navlink3"  role="button" href="search.php">
                <img id="search" src="icn/nav/loupe.png" alt="" width="25" height="25" >
              </a>
            </li>

            <?php 

              $username = "root";
              $password = "";
              $servername = "localhost";
              $dbname = "portofolio"; 

              $conn = new mysqli($servername,$username,$password,$dbname);
              if($conn->connect_error){
                  die("Connection failed: " . $conn->connect_error);
              }

              ?>

            <li class="nav-item p-0 ms-2 me-2 ">
              <a class="nav-link p-0" id="navlink3"  role="button" >
                <div class="form-check d-flex p-0 justify-content-center m-0" >
                  <div class="profile " style=" width: 40px; height: 40px;">
                  <?php
                    $result = $conn->query("SELECT `PROFILE` FROM `users` WHERE `UID` = $userid");
                    if($result->num_rows > 0){ ?> 
                    <div class="gallery"> 
                        <?php while($row = $result->fetch_assoc()){ ?> 
                            
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-4" >
                            <a>
                            <img onclick="userenter();" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['PROFILE']); ?>" > </a>
                            </div>
                        <?php } ?> 
                    </div> 
                    <?php }else{ ?> 
                    <p class="status error">PROFILE not found...</p> 
                    <?php } ?>
                </div>
                </div>           
                </a>

                <div class="menu" id="menu" style="height: 150px; width: 123px;">
                  <ul class="list-unstyled">
                    <li>
                      <a href="Profile.php">
                        <input type="submit" style="display: none;" id="prof">
                        </a>
                        <label for="prof" style="display: flex; color: white;
                        height: 30px;
                        left: 10px;
                        width: 100px;
                        background-color: black;
                        position: absolute;
                        margin: auto;
                        font-size: 13px;
                        font-family:Arial, Helvetica, sans-serif;
                        justify-content: center;
                        align-items: center;
                        font-weight: 300 ;
                        border-radius: 5px;">
                        <span class="material-symbols-outlined">
                          person
                          </span> &nbsp;
                          My Profile
                          
                        </label>
                    </li>
                    <li>
                      <a href="edit.php">
                        <input type="submit" style="display: none;" id="edit-prof">
                        </a>
                        <label for="edit-prof" style="display: flex; color: white;
                        height: 30px;
                        left: 10px;
                        top: 60px;
                        width: 100px;
                        background-color: black;
                        position: absolute;
                        margin: auto;
                        font-size: 13px;
                        font-family:Arial, Helvetica, sans-serif;
                        justify-content: center;
                        align-items: center;
                        font-weight: 300 ;
                        border-radius: 5px;">
                        <span class="material-symbols-outlined">
                          manage_accounts
                          </span> &nbsp;
                          Edit Profile
                          
                        </label>
                    </li>
                    <li>
                      <a href="home.php">
                        <input type="submit" style="display: none;" id="log-out">
                        </a>
                        <label for="log-out" style="display: flex; color: white;
                        height: 30px;
                        left: 10px;
                        top: 100px;
                        width: 100px;
                        background-color: black;
                        position: absolute;
                        margin: auto;
                        font-size: 13px;
                        font-family:Arial, Helvetica, sans-serif;
                        justify-content: center;
                        align-items: center;
                        font-weight: 300 ;
                        border-radius: 5px;">
                        <span class="material-symbols-outlined">
                          logout
                          </span> &nbsp;
                          Log Out
                          
                        </label>
                    </li>
    
                  </ul>
              </div>
            </li>
          </ul>
          </div>
        </div>
      </nav>
  <br>
  <br>
  <br>
  <div class="container h-100 ">
    <div class="row ">
      <div class="col-12">
        <div class="card" style="border: none;">
          <div class="card-body">
            <div class="row justify-content-start">
              <div class="col-md-10">
                <img class="mt-4" src="icn/mouva 1.png" alt="" width="320" height="70">
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container h-100">
      <div class="row ">
        <div class="col-12">
          <div class="card" style="border: none;">
            <div class="card-body">
              <div class="row justify-content-start">
                <div class="col-md-10">
                    <p>Mouva, part of A2Z, is the leading online platform to showcase & discover creative work.</p> 
                    <p>Creative people around the world join Mouva, entering a community made with their original work and creative process in mind. </p>
                    <p>Here, users showcase their work in the form of profiles comprised of Projects.</p>
                    <p>Now, your turn to join them !</p>
                </div>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <footer id="footer">  
    <div class="footer text-center" style=" height: 80px;">
    <div class="row justify-content-center align-items-center" id="sm">
      <ul class="social">
        <li>
            <a href="#">
                <img id="fb" src="icn/social/facebook.png" alt="" width="30" height="30" >
            </a>
        </li>
        <li>
            <a href="#">
                <img id="inst" src="icn/social/instagram.png" alt="" width="30" height="30" >
            </a>
         </li>
        <li>
            <a href="#">
                <img id="twt" src="icn/social/twitter.png" alt="" width="30" height="30" >
            </a>
        </li>
         <li>
            <a href="#">
                <img id="lin" src="icn/social/linkedin.png" alt="" width="30" height="30" >
            </a>
        </li>
    </ul>
    </div>
    <div class="row mt-2">
      <h6 class="text-center" style="font-size: 13px; color: rgb(116, 116, 116);">
        A2Z Team @ 2022
      </h6>
    </div>
    </div>
  </footer>
<style>

/* An optional height of the navbar AFTER scroll */
.navbar.navbar-scroll.navbar-scrolled {
  padding-top: 5px;
  padding-bottom: 5px;
}

.profile{
    position: relative;
    width: 150px;
    height: 150px;
    border:3px black;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 0 10px 0 black;
  }
  .profile:hover{
    transition: 0.3s;
    box-shadow: 0 0 15px 0 black ;
  }
  .profile img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

.bgcolor{
  transition: all 1s;
  background-color: black;
  border-bottom: 1px solid lightgray;
}
.bgcolor1{
  transition: all 1s;
  color: white;
}
.bgcolor2{
  transition: all 1s;
  color: rgb(131, 131, 131);
}
.imgcl{
    transition: all 1s;
    filter: brightness(0) invert(1);
}

body{
  background-color: #ffffff;
}

input[type="submit"]{
  width: 120px;
  height: 55px;
  border: 1px solid;
  background: white;
  font-size: 18px;
  color: black;
  font-weight: 650;
  cursor : pointer;
  outline: none;
  margin-top: 20px;
  margin-bottom: 30px;
}
input[type="button"]:hover{
  border-color: blcak;
  transition: .3s;
  background: black;
  color: white;
  border: 0px;
  box-shadow: 0 0 5px 0 black;
}
input[type="button"]{
  width: 80px;
  height: 30px;
  border: 1px solid;
  border-radius: 20px;
  background: white;
  font-size: 12px;
  color: black;
  font-weight: 550;
  cursor : pointer;
  outline: none;
  margin-bottom: 8px;
}
input[type="submit"]:hover{
  border-color: blcak;
  transition: .3s;
  background: black;
  color: white;
  border: 0px;
  box-shadow: 0 0 15px 0 black;
}
.footbg{
  transition: all 1s;
  background-color: black;
}

.social{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 0 0;
}
.social li{
    margin: 0 10px 0;
}

p{
    color: black;
    font-family: 'Aboreto', cursive;
    font-size: 25px;
    font-weight: 600;
}


.menu{
  padding: 20px;
  margin-top: 5px;
  position: absolute;
  right: 17px;
  display: flex;
  box-shadow: 0 0 6px rgba(0,0,0,0.25);
  border: 1px solid black;
  border-radius: 5px ;
  background-color: white;
  visibility: hidden;
  opacity: 0;

}
.menu:before{
  content: '';
  position: absolute;
  top: -20px;
  right: 16px;
  border: 10px solid;
  border-color: transparent transparent black transparent;
}
.menu.active1{
  transition: 0.5s;
  margin-top: 20px;
visibility: visible;
opacity: 1;
}
.dropdown-menu{
  display: flex;
  visibility: hidden;
  opacity: 0;
  border-radius: 0;
  font-size: 15px;
  padding: 0;
  min-width: 100%;
  right: -30px;
  }
  .dropdown-menu:before{
    border-color: transparent transparent black transparent;
  }
  .si:before{
    content: '';
    position: absolute;
    top: -20px;
    right: 50%;
    border: 10px solid;
    border-color: transparent transparent black transparent;
  }
  #dropdown-menu2:before{
    content: '';
    position: absolute;
    top: -20px;
    right: 45%;
    border: 10px solid;
    border-color: transparent transparent black transparent;
  }
.dropdown-item{
  width: 90px;
  height: 50px;
  padding: 0;
  color: black;
  margin: 0px;
  
}
.dropdown-menu.active2{
  transition: 0.3s;
  margin-top: 20px;
visibility: visible;
opacity: 1;
}


.user-list2{
border-radius:5px ;
list-style-type: none;
margin: 0;
margin-bottom: 12px;
padding: 0;
overflow-y: auto;
}

.file label{
color: white;
height: 70px;
width: 100%;
background-color: black;
position: absolute;
margin: auto;
font-size: 25px;
font-family:Arial, Helvetica, sans-serif;
justify-content: center;
align-items: center;
font-weight: 600 ;

}
.file label:hover{  
transition: .3s;
box-shadow: 0 0 15px 0 gray;
}
.men{
  width: 100%;
  background-color: transparent;
  padding: 0;
  margin-top: 10px;
  position: absolute;
  left: 0px;
  visibility: hidden;
  opacity: 0;
}
.men.active{
opacity: 1;
visibility: visible;
transition: 0.3s;

}
.men-item{
  color: white;
  text-decoration: none;
  box-sizing: 100%;
  right: 10px;
}

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 1,
  'wght' 400,
  'GRAD' 0,
  'opsz' 20
}

  </style>
  <script src="js/bootstrap.js"></script>
  <script src="js/timeline.js"></script>

</body>
</html>