const tutorRadio = formLogin.getElementsByClassName('tutor-radio')[0];
const tutorLabel = formLogin.getElementsByClassName('tutor-label')[0];
const learnerRadio = formLogin.getElementsByClassName('learner-radio')[0];
const learnerLabel = formLogin.getElementsByClassName('learner-label')[0];


tutorRadio.addEventListener('click', function(){
    if(tutorRadio.checked){
        // tutorLabel.style.backgroundColor = "red";
        console.log(tutorRadio.checked);
    }
})

learnerRadio.addEventListener('click', function(){
    if(learnerRadio.checked){
        // learnerLabel.style.backgroundColor = "red";
        console.log(learnerRadio.checked);

    }
})