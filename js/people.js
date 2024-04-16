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
    var menuu = document.getElementById('menuu');
    if(scrollValue < 1){
        menuu.classList.remove('imgcl');
    }
    else{
        menuu.classList.add('imgcl');
    }
    var search = document.getElementById('search');
    if(scrollValue < 1){
        search.classList.remove('imgcl');
    }
    else{
        search.classList.add('imgcl');
    }


    var sm = document.getElementById('sm');
    if(scrollValue < 100){
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


    var foot = document.getElementById('footer');
    if(scrollValue < 100 ){
        foot.classList.remove('footbg');
    }
    else{
        foot.classList.add('footbg');
    }


    var navLink5 = document.getElementById('navlink5');
    if(scrollValue < 100){
        navLink5.classList.remove('bgcolor1');
        navLink5.classList.add('bgcolor2');
    }
    else{
        navLink5.classList.remove('bgcolor2');
        navLink5.classList.add('bgcolor1');
    }
    

    var navLink6 = document.getElementById('navlink6');
    if(scrollValue < 100){
        navLink6.classList.remove('bgcolor1');
        navLink6.classList.add('bgcolor2');
    }
    else{
        navLink6.classList.remove('bgcolor2');
        navLink6.classList.add('bgcolor1');
    }
    

    var navLink7 = document.getElementById('navlink7');
    if(scrollValue < 100){
        navLink7.classList.remove('bgcolor1');
        navLink7.classList.add('bgcolor2');
    }
    else{
        navLink7.classList.remove('bgcolor2');
        navLink7.classList.add('bgcolor1');
    }

    

}
window.addEventListener('scroll',changeBg);
function userenter(){
    const menu = document.querySelector(".menu");
        menu.classList.toggle('active1');
}
function dropdown(x){
    const drop = document.getElementById(x);
        drop.classList.toggle('active2');
}
function enterfb(x){
    var background = document.getElementById(x);

        background.src="icn/social/fb.png";
}
function leavefb(x){
    var background = document.getElementById(x);

        background.src="icn/social/facebook.png";
}
function enterin(x){
    var background = document.getElementById(x);

        background.src="icn/social/in.png";
}
function leavein(x){
    var background = document.getElementById(x);

        background.src="icn/social/instagram.png";
}
function entertw(x){
    var background = document.getElementById(x);

        background.src="icn/social/tw.png";
}
function leavetw(x){
    var background = document.getElementById(x);

        background.src="icn/social/twitter.png";
}
function min(){
    const meni = document.querySelector(".men");
        meni.classList.toggle('active');
}
