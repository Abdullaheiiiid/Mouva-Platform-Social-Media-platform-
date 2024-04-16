function changeBg(){
    var navbar = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    if(scrollValue < 1){
        navbar.classList.remove('bgcolor');
    }
    else{
        navbar.classList.add('bgcolor');
    }


    var img = document.getElementById('img');
    if(scrollValue < 1){
        img.classList.remove('imgcl');
    }
    else{
        img.classList.add('imgcl');
    }


    var user = document.getElementById('user');
    if(scrollValue < 1){
        user.classList.remove('imgcl');
    }
    else{
        user.classList.add('imgcl');
    }



    var sm = document.getElementById('sm');
    if(scrollValue < 70){
        sm.classList.remove('imgcl');
    }
    else{
        sm.classList.add('imgcl');
    }


    var navLiink1 = document.getElementById('navlink1');
    if(scrollValue < 1){
        navLiink1.classList.remove('bgcolor1');
        navLiink1.classList.add('bgcolor2');

    }
    else{
        navLiink1.classList.remove('bgcolor2');
        navLiink1.classList.add('bgcolor1');
    }

    
    var navLink2 = document.getElementById('navlink2');
    if(scrollValue < 1){
        navLink2.classList.remove('bgcolor1');
        navLink2.classList.add('bgcolor2');
    }
    else{
        navLink2.classList.remove('bgcolor2');
        navLink2.classList.add('bgcolor1');
    }



    var navLink3 = document.getElementById('navlink3');
    if(scrollValue < 1){
        navLink3.classList.remove('bgcolor1');
        navLink3.classList.add('bgcolor2');
    }
    else{
        navLink3.classList.remove('bgcolor2');
        navLink3.classList.add('bgcolor1');
    }



    var navLink4 = document.getElementById('navbarDropdown');
    if(scrollValue < 1){
        navLink4.classList.remove('bgcolor1');
        navLink4.classList.add('bgcolor2');
    }
    else{
        navLink4.classList.remove('bgcolor2');
        navLink4.classList.add('bgcolor1');
    }


    var foot = document.getElementById('footer');
    if(scrollValue < 70 ){
        foot.classList.remove('footbg');
    }
    else{
        foot.classList.add('footbg');
    }


    var navLink5 = document.getElementById('navlink5');
    if(scrollValue < 70){
        navLink5.classList.remove('bgcolor1');
        navLink5.classList.add('bgcolor2');
    }
    else{
        navLink5.classList.remove('bgcolor2');
        navLink5.classList.add('bgcolor1');
    }
    

    var navLink6 = document.getElementById('navlink6');
    if(scrollValue < 70){
        navLink6.classList.remove('bgcolor1');
        navLink6.classList.add('bgcolor2');
    }
    else{
        navLink6.classList.remove('bgcolor2');
        navLink6.classList.add('bgcolor1');
    }
    

    var navLink7 = document.getElementById('navlink7');
    if(scrollValue < 70){
        navLink7.classList.remove('bgcolor1');
        navLink7.classList.add('bgcolor2');
    }
    else{
        navLink7.classList.remove('bgcolor2');
        navLink7.classList.add('bgcolor1');
    }
    

}
window.addEventListener('scroll',changeBg);
function user(){
    var user = document.querySelector(".boda");

    user.addEventListener("click",function(){
        this.classList.toggle("action");
        
    })
}
