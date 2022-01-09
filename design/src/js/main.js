// Load Bootstrap JS
import bootstrap from 'bootstrap'

// Load Styles
import '../scss/main.scss';

// App code
// console.log(`Hello ${process.env.var1}`);

let hamburger_open = false;
const hamburger = document.querySelector('.hamburger');

const navBar = document.getElementById('navbar');
const isIndex = document.getElementById('index');
const navMain = document.getElementById('nav-main');
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
        navBar.classList.add('bg-primary');
    });
    navMain.addEventListener('hide.bs.collapse', function () {
        if(_y <= 100){
            navBar.classList.remove('bg-primary');
            navBar.classList.add('bg-transparent');
        }
    });
    window.addEventListener('scroll', function() {
        _y = window.pageYOffset;
        if(navBar){
            if(_y > 100) { // down
                navBar.classList.remove('bg-transparent');
                navBar.classList.add('bg-primary');
            } else {
                navBar.classList.remove('bg-primary');
                navBar.classList.add('bg-transparent');
            }
        }
    }, {passive: true});    

} else {
    navBar.classList.remove('bg-transparent');
    navBar.classList.add('bg-primary');
}
