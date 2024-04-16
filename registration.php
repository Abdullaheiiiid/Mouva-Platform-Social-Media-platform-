<!DOCTYPE html>
<!--Main Navigation-->
<head>
  <title>Sign Up</title>
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
      <a class="navbar-brand m-0" href="home.php">
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
            <a href="home.php">
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
            <a href="about us.html">
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
          <li class="" style="margin-top: 120px;" >
            <a class="" type="button" onclick="dropdown('dropdown-menu1');"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <input type="submit" style="display: none;" id="submit3">
              </a>
              <label for="submit3" style="display: flex;">
                <span class="material-symbols-outlined">
                  app_registration
                  </span> &nbsp;
                Registration
                <span class="material-symbols-outlined">
                  chevron_right
                  </span>
              </label>
              <div class="dropdown-menu " id="dropdown-menu1" aria-labelledby="dropdownMenuButton" style="padding: 0; margin-right: 30px; margin-top: 90px;">
                <a class="dropdown-item" href="Sign.php">
                  <input type="submit" style="display: none;" id="submit5">
                  </a>
                  <label class="si" for="submit5" style="display: flex; padding: 0;">
                    <span class="material-symbols-outlined">
                      login
                      </span> &nbsp;
                    Sign In
                    <span class="material-symbols-outlined">
                      chevron_right
                      </span>
                  </label>
                  <a class="dropdown-item" href="registration.php">
                    <input type="submit" style="display: none;" id="submit4">
                    </a>
                    <label for="submit4" style="display: flex; margin-top: 70px;">
                      <span class="material-symbols-outlined">
                        how_to_reg
                        </span> &nbsp;
                      Sign Up
                      <span class="material-symbols-outlined">
                        chevron_right
                        </span>
                    </label>

              </div>
          </li>
          
        </ul>
      </div>
      </div>
      <div class="collapse navbar-collapse" style="justify-content: space-between;" id="navbarCollapse">
        <ul>
        <div class="navbar-nav  mt-3">
          <li class="nav-item active">
            <a class="nav-link" id="navlink1" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a
               class="nav-link"
               id="navlink2"
               href="about us.html"

               >About Us</a
              >
          </li>
            <li class="nav-item dropdown" >
              <a class="nav-link  dropdown-toggle" type="button" onclick="dropdown('dropdown-menu2');" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Registration
              </a>
              <div class="dropdown-menu" id="dropdown-menu2" aria-labelledby="dropdownMenuButton" style="  margin-top: 30px;">
                <a class="dropdown-item" href="Sign.php"><input value="Sign In" type="submit" style=" border:0; margin: 0; width: 100%; height: 100%; font-size: 17px; font-weight: 400; padding: 0;"></a>
                <a class="dropdown-item" href="registration.php"><input value="Sign Up" type="submit" style=" border:0; margin: 0; width: 100%; height: 100%; font-size: 17px; font-weight: 400; padding: 0; "></a>
              </div>
            </li>
          </ul>
      <ul class="navbar-nav flex-row ">
        <li class="nav-item">
          <a class="nav-link" id="navlink3"  role="button" >
             <img id="user" src="icn/nav/user.png" alt="" width="40" height="40" onclick="userenter();">
          </a>
          <div class="menu" id="menu">
              <ul class="list-unstyled">
                <li>
                  <a style="text-decoration: none;"href="Sign.php">
                    <input value="Sign In" type="button">
                  </a>
                </li>
                <li>
                  <a style="text-decoration: none;"href="registration.php">
                    <input value="Sign Up" type="button">
                  </a>
                </li>

              </ul>
          </div>
          </ul>
        </li>
      </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row justify-content-center align-items-center">
    <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-4">
    <div class="container w-100 h-100 mb-3">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="W-100">
          <div class="card" style="border: none;">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="W-100 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"style="color: black;">Sign Up</p>

                <form class="mx-1 mx-md-4" action="registercheck.php" method="post">

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="input-group">
                          <input type="text" id="form3Example3c" required class="input" name = "firstName"/>
                          <label class="input-label" for="form3Example3c">First Name</label>
                        </div>
                      </div>
                      
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="input-group">
                          <input type="text" id="form3Example3c" required class="input" name = "lastName"/>
                          <label class="input-label" for="form3Example3c">Last Name</label>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="input-group">
                          <input type="text" id="form3Example3c" required class="input" name = "userName"/>
                          <label class="input-label" for="form3Example3c">Username</label>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="input-group">
                          <input type="email" id="form3Example3c" required class="input" name = "email"/>
                          <label class="input-label" for="form3Example3c">Email</label>
                        </div>
                      </div>
                          
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="input-group">
                          <input type="password" id="form3Example3c" required class="input" name = "password"/>
                          <label class="input-label" for="form3Example3c">Password</label>
                        </div>
                      </div>


                  <div class="form-check d-flex justify-content-center " >
                      <label class="form-check-label " style="font-family: sans-serif; color: rgb(83, 83, 83);" for="form2Example3">
                        Already a member? <a class=""  style=" text-decoration: none; color: black;"href="sign.php">Log In</a>
                      </label>
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                    <a href="profile.php">
                        <input value="Sign Up" type="submit">
                      </a>
                    </div>
                </form>

              </div>
      
            </div>
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
  align-items: center;
  justify-content: center;
}
.container{
    position: relative;
    width: 70vw;
    height: 80vh;
    border-radius: 15px;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0,0,0,0.3) ;
    justify-content: center;

}
.container:hover{
  transition: 0.3s;
  box-shadow: 0 6px 30px 0 rgba(0,0,0,0.3), 0 8px 30px 0 rgba(0,0,0,0.3) ;
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
.input-group{
  position: relative;
}
.input{
  width: 100%;
  padding: 10px;
  border: none;
  font: inherit;
  color: rgb(105, 105, 105);
  background-color: transparent;
  outline: 2px solid rgb(105, 105, 105);
}
.input-label{
  position: absolute;
  top: 0;
  left: 0;
  transform: translate(10px,10px);
  transition: transform .25s;
}
.input:focus+.input-label,
.input:valid+.input-label{
  transform:translate(10px,-14px) scale(.8);
  color: black;
  padding-inline: 5px;
  background-color: white;
}
.input:is(:focus, :valid){
  outline-color: black;
}
.menu{
padding: 20px;
margin-top: 5px;
position: absolute;
right: 12px;
display: flex;
box-shadow: 0 0 6px rgba(0,0,0,0.25);
border: 1px solid black;
border-radius: 5px ;
visibility: hidden;
opacity: 0;
background-color: white;


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
  <script src="js/registration.js"></script>

</body>
</html>