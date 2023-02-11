const detailEl = document.getElementsByClassName('details');


for (var i = 0 ; i < detailEl.length; i++){
    if(detailEl[i].innerText.length > 100){
        detailEl[i].innerText = detailEl[i].innerText.slice(0,100) + "...";
    }
}