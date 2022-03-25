/* function that checks the scrolling 
of the page to change the background opacity
of the navigation bar. 0 = transparent -- 1 visible */
var navbar = document.getElementById('navbar')
document.onscroll = function () {
    (window.pageYOffset >= 250) 
        ? navbar.style.background = "rgba(27, 27, 27, 1)"
        : navbar.style.background = "rgba(255, 255, 255, 1)"
}

/* ---------------------------- show and hide the menu ---------------------------- */
var toggleMenu = document.getElementById('toggle-menu')
var navItems = document.getElementById('nav-items')
var menuIcon = document.querySelectorAll('.toggle-menu div')

toggleMenu.addEventListener("click", function(){
    navItems.classList.toggle('go-back')
    /* forEach to make the menu an X */
    menuIcon.forEach((line) => {
        line.classList.toggle(line.id)
    })
})
/* --------------------------- end show and hide the menu --------------------------- */