const nextBtn = document.getElementsByClassName('next-btn')[0];
const prevBtn = document.getElementsByClassName('prev-btn')[0];
const scrollableEl = document.getElementById('scrollable-element');
const cards = document.getElementsByClassName('card');

nextBtn.addEventListener('click', function(){
    scrollableEl.scrollLeft += scrollableEl.offsetWidth;

    scrollableEl.addEventListener('scroll', function() {
        let newScroll = scrollableEl.scrollLeft;
        checkScroll(newScroll);
    });
});

prevBtn.addEventListener('click', function(){
    scrollableEl.scrollLeft -= scrollableEl.offsetWidth;

    scrollableEl.addEventListener('scroll', function() {
        let newScroll = scrollableEl.scrollLeft;
    });
});

var lastScrollPos = 0;
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
    }else if(Math.floor(scrollableEl.scrollLeft + scrollableEl.offsetWidth)+1 >= scrollableEl.scrollWidth){
        if(!nextBtn.classList.contains('disabled-btn')){
            nextBtn.classList.add('disabled-btn');
        }
    }
}

// const img = document.getElementsByClassName('img-preview')[0];
// console.log(img.clientHeight, img.style.width);

