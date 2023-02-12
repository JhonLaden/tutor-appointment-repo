// const formLogin = document.getElementsByClassName('form-login')[0];
// const createAccount = formLogin.getElementsByClassName('sign-up')[0];
// const loginBody = formLogin.getElementsByClassName('login-body')[0];

// currentelement = formLogin.getElementsByClassName('login')[0];


// var scrolling = false;

// createAccount.addEventListener('click', function(){
//     const login = formLogin.getElementsByClassName('login')[0];
//     const loginBtns = formLogin.getElementsByClassName('login-btns')[0];
//     const loginBody = formLogin.getElementsByClassName('login-body')[0];

//     var next = nextElement(login);
//     checkDisplay(next);
//     checkDisplay(loginBtns);

//     next.scrollIntoView();
//     currentElement = next;

//     intervalID = setInterval(function(){
//         if (!scrolling) return;
//         scrolling = false;
//         clearInterval(intervalID);
//     }, 500); // Check every 0.5 seconds
    
// });

// var scrolling = false;

// loginBody.addEventListener("scroll", function(){
//   scrolling = true;
// });


// make module for this one
// slider is resposible for next and prev scroll for log in page


function nextElement(currentEl){
    var next = currentEl.nextSibling;
    while (next && next.nodeType !== 1) {
        next = next.nextSibling;
    }
    return next;
}

function prevElement(currentEl){
    var prev = currentEl.previousSibling;
    while (prev && prev.nodeType !== 1) {
        prev = prev.previousSibling
    }
    return prev;
}

function checkDisplay(currentEl){
    styleDisplay = window.getComputedStyle(currentEl).display;
    if(styleDisplay == "none"){
        styleDisplay = "flex";
        currentEl.style.display = styleDisplay;
    }
}