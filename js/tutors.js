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
});


// check scroll function is for scrollable effect to check 
// if the scroll is on the first.
// if yes, add disabled btn to the icon so that user cant click it
function checkScroll(newScroll){
    if(newScroll <= 0){
        prevBtn.classList.add('disabled-btn')
    }else if(prevBtn.classList.contains('disabled-btn')){
        prevBtn.classList.remove('disabled-btn')
    }
}

scrollableEl.addEventListener('scroll', function() {
    let newScroll = scrollableEl.scrollLeft;
    console.log(`New scroll position: ${newScroll}px`);
  });