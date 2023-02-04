const sliderBack = formLogin.getElementsByClassName('slider-back')[0];
const sliderNext = formLogin.getElementsByClassName('slider-next')[0];

function nextElement(currentEl){
    var next = currentEl.nextSibling;
    while (next && next.nodeType !== 1) {
        next = next.nextSibling;
    }
    return next;
}


sliderBack.addEventListener('click', function(){
    prev = prevElement(currentElement);
    prev.scrollIntoView();
    currentElement = prev;
})

sliderNext.addEventListener('click', function(){
    next = nextElement(currentElement);
    next.scrollIntoView();
    currentElement = next;

})