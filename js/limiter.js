const detailEl = document.getElementsByClassName('details');

console.log(detailEl[3].innerText);

for (var i = 0 ; i < detailEl.length; i++){
    console.log(detailEl[i].innerText.length);
    if(detailEl[i].innerText.length > 100){
        detailEl[i].innerText = detailEl[i].innerText.slice(0,100) + "...";
    }
}