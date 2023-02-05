const tutorRadio = formLogin.getElementsByClassName('tutor-radio')[0];
const tutorLabel = formLogin.getElementsByClassName('tutor-label')[0];

const learnerRadio = formLogin.getElementsByClassName('learner-radio')[0];
const learnerLabel = formLogin.getElementsByClassName('learner-label')[0];

const pDefault = formLogin.getElementsByClassName('form-p-default')[0];
const pTutor = formLogin.getElementsByClassName('form-p-tutor')[0];
const pLearner = formLogin.getElementsByClassName('form-p-learner')[0];

const loginNextBtn = formLogin.getElementsByClassName('login-next-btn')[0];

const formTutor = formLogin.getElementsByClassName('form-tutor')[0];
const formLearner = formLogin.getElementsByClassName('form-learner')[0];

tutorLabel.addEventListener('click', function(){
    entry(pTutor);
    switchDisplay(formLearner, formTutor);
});
learnerLabel.addEventListener('click', function(){
    entry(pLearner);
    switchDisplay(formTutor, formLearner);
});
    

function entry(p){ 
    displayNone();
    p.style.display = "flex";
}

function displayNone(){
    pDefault.style.display = "none";
    pTutor.style.display = "none";
    pLearner.style.display = "none";
}

function switchDisplay(form1, form2){
    loginNextBtn.disabled = false;
    form1.style.display = "none";
    form2.style.display = "flex";
}