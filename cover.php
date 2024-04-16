<!DOCTYPE html>
<!--Main Navigation-->
<head>
<?php
  session_start();
  $userid=$_SESSION['UID'];
?>
  <title>cover Picture</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="shortcut icon" type="image/x-icon" href="icn/MOUVA.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Comfortaa:wght@400;500;600&display=swap" rel="stylesheet"></head>
<body>
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
            <label for="submit1" style="display: flex;  color: white;
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
border-radius: 0;">
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
            <label for="submit2" style="display: flex; color: white;
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
border-radius: 0;">
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
            <label for="submit3" style="display: flex; color: white;
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
border-radius: 0;">
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
        <li class="nav-item">
        <a class="nav-link" id="navlink3"  role="button" >
             <img id="user" src="icn/nav/user.png" alt="" width="40" height="40" onclick="userenter();">
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

  <form action="coverupload.php" method="post" enctype="multipart/form-data" class="container" >
    <header class="header">
        <h4 class="title">Upload Cover picture</h4>
    </header>
    <div id="display_image"></div>

    <ul class="user-list2 file d-flex mt-4 " style="justify-content: center;">
      <li style="margin-right: 120px; margin-left: -140px;">
      <input type="file" id="image_input" name="image_input">
      <label for="image_input" style=" display: flex;">
        <span class="material-symbols-outlined">
          add_photo_alternate
          </span> &nbsp;
        Choose a Cover
      </label>
      </li>
      <li style="margin-left: 90px; margin-left:40px ;">
        <a href="profile.php">
        <input type="submit" style="display: none;" id="submit" value="Upload" name= "submit">
        </a>
        <label for="submit" style="display: flex; font-size: 20px;">
          Next
          <span class="material-symbols-outlined">
            chevron_right
            </span>
        </label>
      </li>
    </ul>
    

</form>
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

  .container{
    border-radius:5px ; 
    box-shadow: 3px 3px 10px rgba(0,0,0,0.2); 
    overflow: hidden;
     width:100%;
     background-color: black;
     margin-bottom: 30px;
     margin-top: 30px;
  }
  .title{
    margin: 0;
}
.subtitle{
    display: inline-block;
    margin: 5px 0 5px;
    opacity: 0.8;
}
.header{
    background-color: black;
    color: white;
    padding: 30px 20px;
    
}
.header input{
    background-color: white;
    border: 0;
    border-radius: 50px;
    color: black;
    font-size: 14px;
    padding: 10px 15px;
    width: 100%;

}
.header input:focus{
    outline: none;
}
.user-list{
    border-radius:5px ;
background-color: white;
list-style-type: none;
margin: 0;
margin-bottom: 12px;
padding: 0;
height: 500px;
overflow-y: auto;
background-size: cover;
background-position: center;
}

.user-list li{
    display: flex;
    padding: 20px;
}

.user-list2{
  border-radius:5px ;
list-style-type: none;
margin: 0;
margin-bottom: 12px;
padding: 0;
height: 70PX;
overflow-y: auto;
}
  
input[type="file"]{
  display: none;
}
.file label{
  color: black;
  height: 50px;
  width: 150px;
  background-color: white;
  position: absolute;
  margin: auto;
  font-size: 14px;
  font-family:Arial, Helvetica, sans-serif;
  justify-content: center;
  align-items: center;
  border-radius: 7px;
  font-weight: 400;
  box-shadow: 0 0 5px 0 rgb(114, 114, 114);

}

#display_image{
  width: 100%;
  height: 500px;
  border-radius: 5px;
  background-position: center;
  background-size: cover;
  background-color: white;
  margin-bottom: 30px;
  background-size: contain;
    background-repeat: no-repeat;
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
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 1,
  'wght' 400,
  'GRAD' 0,
  'opsz' 20
}
.si:before{
  content: '';
  position: absolute;
  top: -20px;
  right: 50%;
  border: 10px solid;
  border-color: transparent transparent black transparent;
}
 

.user-list2{
border-radius:5px ;
list-style-type: none;
margin: 0;
margin-bottom: 12px;
padding: 0;
overflow-y: auto;
}

.file label:hover{  
transition: .3s;
box-shadow: 0 0 15px 0 gray;
}
  </style>
  <script src="js/bootstrap.js"></script>
  <script src="js/upload profile pic.js"></script>

</body>
</html>