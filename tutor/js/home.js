const head = document.getElementById('head');

setInterval(function(){
    // check if the user is on top of the webpage.
    // if yes, change the color of the header.
    if (document.documentElement.scrollTop > 0) {
        head.classList.remove('bg-blue');
    } else {
        head.classList.add('bg-blue');
    }
}, 100)