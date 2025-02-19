const toTop = document.querySelector('.to-top');
const sheet = document.querySelector('.sheet');
const scroll = document.querySelector('.scroll');
const title = document.querySelector('.rev-title');
const table = document.querySelector('.review-table-container');


window.addEventListener("scroll",() => {
    if(window.scrollY > 200){
        toTop.classList.add("active");
        scroll.classList.add("active");
    }else{
        toTop.classList.remove("active");
        scroll.classList.remove("active");;
    }
})

window.addEventListener("scroll",() => {
    if(window.scrollY > 200){


    }
    if(window.scrollY > 1600){
        title.classList.add("active");
        table.classList.add("active");
    }
    else{

        title.classList.remove("active");
        table.classList.remove("active");
    }
})



var NavLinks = document.getElementById('nav-link');
var Menu = document.getElementById('menu');
function showMenu() {
    NavLinks.style.display = "block";
    NavLinks.style.right = "0";
    Menu.style.opacity = "0";
}
function hideMenu(){
    NavLinks.style.right = "-400px";
    setTimeout(function() {
        Menu.style.opacity = "1";
        },400);

}

