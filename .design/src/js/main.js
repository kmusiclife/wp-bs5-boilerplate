// Load Bootstrap JS
import bootstrap from 'bootstrap'
import { Offcanvas } from 'bootstrap'

// Load Styles
import '../scss/main.scss';

const hamburger = document.querySelector('.hamburger');
const hamburgerInner = document.getElementById('hamburgerInner');
var OffcanvasMenu = document.getElementById('offcanvasMenu');
var _y = window.pageYOffset;

hamburger.addEventListener('click', function(){ 
    hamburger.classList.add('is-active');
});
if(OffcanvasMenu){
    OffcanvasMenu.addEventListener('shown.bs.offcanvas', function () {
        hamburger.classList.add('is-active');
    });
    OffcanvasMenu.addEventListener('hide.bs.offcanvas', function () {
        hamburger.classList.remove('is-active');
    });
    window.addEventListener('scroll', function() {
        _y = window.pageYOffset;
        if(_y > 100) { // down scroll
            hamburgerInner.classList.remove('light');
            hamburgerInner.classList.add('dark');
        } else {
            hamburgerInner.classList.remove('dark');
            hamburgerInner.classList.add('light');
        }
    }, {passive: true});
}
