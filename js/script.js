var iconButton = document.getElementsByClassName('icon-button')[0];
var navbar = document.getElementsByClassName('navbar')[0];


iconButton.addEventListener('click', function(){
    navbar.classList.toggle('navbar-collapse');
})