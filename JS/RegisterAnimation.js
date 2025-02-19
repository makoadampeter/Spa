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
