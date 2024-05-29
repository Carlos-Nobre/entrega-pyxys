window.addEventListener('scroll',animationNav)

function animationNav()
{
    const scrollY = window.scrollY;
    const nav = document.querySelector("nav");

    if( scrollY > 9 ){
        
        nav.setAttribute('class','rednav');

    }
    else if(menuMobile.classList.contains('open')){
        nav.setAttribute('class','rednav');
    }
    
    else{
        
        nav.removeAttribute('class');

    }
}

const menuMobile = document.querySelector(".show-menu");

function menuShow(){
    
    const nav = document.querySelector("nav");

    if(menuMobile.classList.contains('open')){
        
        
        nav.removeAttribute('class');
        menuMobile.classList.toggle('open');
    }
    else{
        
        nav.setAttribute('class','rednav');
        menuMobile.classList.toggle('open');
    }
}