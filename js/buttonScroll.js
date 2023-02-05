const sliderBack = formLogin.getElementsByClassName('slider-back')[0];
const sliderNext = formLogin.getElementsByClassName('slider-next')[0];
const submitBtn = formLogin.getElementsByClassName('submit-btn')[0];

function nextElement(currentEl){
    var next = currentEl.nextSibling;
    while (next && next.nodeType !== 1 ) {
        next = next.nextSibling;
    }
    return next;
}


sliderBack.addEventListener('click', function(){
    var prev = prevElement(currentElement);
    // these 2 variables are use to get the computed style of an element and 
    // get the property value of display
    var sty;
    var disp;

    if(prev != null){
        sty = window.getComputedStyle(prev);
        disp = sty.getPropertyValue('display');
    }

    if(disp == "none"){
        currentElement = prev;
        prev = prevElement(currentElement);
    }

    if(prev != null){
        sty = window.getComputedStyle(prev);
        disp = sty.getPropertyValue('display');
        if(prev.classList.contains('login')){
            const loginBtns = formLogin.getElementsByClassName('login-btns')[0];
            if(prev.classList.contains('login')){
                loginBtns.style.display = "none";
            }
        }
    }
    
    if(prev == null || disp == "none"){
        return
    }
    prev.scrollIntoView();
    currentElement = prev;
    checkLast(currentElement);

})

sliderNext.addEventListener('click', function(){
    var next = nextElement(currentElement);
    var sty;
    var disp;

    sty = window.getComputedStyle(next);
    disp = sty.getPropertyValue('display');

    if(disp == "none"){
        currentElement = next;
        next = nextElement(currentElement);
    }

    if(next != null){
        sty = window.getComputedStyle(next);
        disp = sty.getPropertyValue('display');

        if(next.classList.contains('login')){
            const loginBtns = formLogin.getElementsByClassName('login-btns')[0];
            if(next.classList.contains('login')){
                loginBtns.style.display = "none";
            }
        }
    }
    if(next == null || disp == "none"){
        return
    }
    next.scrollIntoView();
    currentElement = next;
    checkLast(currentElement);
})

function checkLast(current){
    if(current.classList.contains('form-tutor') || current.classList.contains('form-learner')){
        sliderNext.style.display = "none";
        submitBtn.style.display = "flex";
    }else{
        sliderNext.style.display = "flex";
        submitBtn.style.display = "none";
    }
}