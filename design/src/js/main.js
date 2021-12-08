// Load Bootstrap JS
import bootstrap from 'bootstrap'

// Load Styles
import '../scss/main.scss';

// App code
// console.log(`Hello ${process.env.var1}`);

let hamburger_open = false;
const hamburger = document.querySelector('.hamburger');

hamburger.addEventListener('click', function(){
    
    if(hamburger_open){ // to close
        hamburger.classList.remove('is-active');
        hamburger_open = false;
    } else {
        hamburger.classList.add('is-active');
        hamburger_open = true;
    }

});