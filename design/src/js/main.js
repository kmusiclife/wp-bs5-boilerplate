// Load Bootstrap JS
import bootstrap from 'bootstrap'

// Load Styles
import '../scss/main.scss';

// App code
// console.log(`Hello ${process.env.var1}`);

let hamburger_open = false;
const hamburger = document.querySelector('.hamburger');
const hamburgerInner = document.getElementById('hamburgerInner');
const navBar = document.getElementById('navbar');
const navMain = document.getElementById('nav-main');
const isIndex = document.getElementById('index');
var _y = window.pageYOffset;

hamburger.addEventListener('click', function(){
    
    if(hamburger_open){ // to close
        hamburger.classList.remove('is-active');
        hamburger_open = false;
    } else {
        hamburger.classList.add('is-active');
        hamburger_open = true;
    }

});
if(isIndex){
    navMain.addEventListener('show.bs.collapse', function () {
        navBar.classList.remove('bg-transparent');
        navBar.classList.remove('navbar-dark');
        navBar.classList.add('bg-light');
        navBar.classList.add('navbar-light');
        hamburgerInner.classList.remove('light');
        hamburgerInner.classList.add('dark');
    });
    navMain.addEventListener('hide.bs.collapse', function () {
        if(_y <= 100){
            navBar.classList.remove('bg-light');
            navBar.classList.remove('navbar-light');
            navBar.classList.add('bg-transparent');
            navBar.classList.add('navbar-dark');
            hamburgerInner.classList.remove('dark');
            hamburgerInner.classList.add('light');    
        }
    });
    window.addEventListener('scroll', function() {
        _y = window.pageYOffset;
        if(navBar){
            if(_y > 100) { // down
                navBar.classList.remove('bg-transparent');
                navBar.classList.remove('navbar-dark');
                navBar.classList.add('bg-light');
                navBar.classList.add('navbar-light');
                hamburgerInner.classList.remove('light');
                hamburgerInner.classList.add('dark');
            } else {
                if(!hamburger_open){
                    navBar.classList.remove('bg-light');
                    navBar.classList.remove('navbar-light');
                    navBar.classList.add('bg-transparent');
                    navBar.classList.add('navbar-dark');
                    hamburgerInner.classList.remove('dark');
                    hamburgerInner.classList.add('light');
                }
            }
        }
    }, {passive: true});    

}
