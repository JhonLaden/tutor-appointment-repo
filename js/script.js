var scrollButton = document.getElementById('about-link');
var targetElement = document.getElementById('about');
var body = document.getElementsByTagName('body');
const head = document.getElementById('head');

scrollButton.addEventListener('click', () => {
    body.scrollTop
});


setInterval(function(){
    // check if the user is on top of the webpage.
    // if yes, change the color of the header.
    if (document.documentElement.scrollTop > 0) {
        head.style.backgroundColor = "#fff";
    } else {
        head.style.backgroundColor = "#3D5BFC";

    }
}, 100)