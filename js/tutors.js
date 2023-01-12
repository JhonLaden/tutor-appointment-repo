const nextBtn = document.getElementsByClassName('next-btn')[0];
const prevBtn = document.getElementsByClassName('prev-btn')[0];
const scrollableEl = document.getElementById('scrollable-element');
const cards = document.getElementsByClassName('card');

nextBtn.addEventListener('click', function(){
    scrollableEl.scrollLeft += 320;

    scrollableEl.addEventListener('scroll', function() {
        let newScroll = scrollableEl.scrollLeft;
        checkScroll(newScroll);
    });
});

prevBtn.addEventListener('click', function(){
    scrollableEl.scrollLeft -= 320;

    scrollableEl.addEventListener('scroll', function() {
        let newScroll = scrollableEl.scrollLeft;
    });
});

var lastScrollPos = 0;
var lastScrollHeight = 642.8571166992188;
// check scroll function is for scrollable effect to check 
// if the scroll is on the first.
// if yes, add disabled btn to the icon so that user cant click it
function checkScroll(newScroll){
    if(newScroll <= 0){
        prevBtn.classList.add('disabled-btn')
    }else if(newScroll > lastScrollPos || newScroll < lastScrollPos){

        //in the middle
        if(prevBtn.classList.contains('disabled-btn')){
            prevBtn.classList.remove('disabled-btn');
        }
        if(nextBtn.classList.contains('disabled-btn')){
            nextBtn.classList.remove('disabled-btn');

        }
        lastScrollPos = newScroll;
        console.log(scrollableEl.scrollLeft);
    }else if(Math.floor(scrollableEl.scrollLeft + scrollableEl.offsetWidth)+1 >= scrollableEl.scrollWidth){
        if(!nextBtn.classList.contains('disabled-btn')){
            nextBtn.classList.add('disabled-btn');
        }
    }
}