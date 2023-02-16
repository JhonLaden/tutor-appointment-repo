const signInPrevBtn = formLogin.getElementsByClassName('prev-btn')[0];
const signInNextBtn = formLogin.getElementsByClassName('next-btn')[0];
const typeRadio = formLogin.getElementsByClassName('type-radio');
const typeLabel = formLogin.getElementsByClassName('type-label');



for(var i = 0; i < typeRadio.length; i++){
    typeRadio[i].addEventListener('click', function(){
        signInNextBtn.disabled = false;
    });
}

signInPrevBtn.addEventListener('click', function(){
    const loginMain = formLogin.getElementsByClassName('login-main')[0];
    const signin = formLogin.getElementsByClassName('sign-in')[0];

    for(var i = 0; i < typeRadio.length; i++){
        typeRadio[i].checked = false;
        signInNextBtn.disabled = true;
    }

    loginMain.style.display = 'block';
    signin.style.display = 'none';
});

signInNextBtn.addEventListener('click', function(){
    if(typeRadio[0].checked){
        const tutorForm = formLogin.getElementsByClassName('tutor-form')[0];
        tutorForm.style.display = "flex";
    }else if(typeRadio[1].checked){
        const learnerForm = formLogin.getElementsByClassName('learner-form')[0];
        learnerForm.style.display = "flex";
    }else if(typeRadio[2].checked){
        const learnerForm = formLogin.getElementsByClassName('learner-form')[0];
        learnerForm.style.display = "flex";
    }
    const signin = formLogin.getElementsByClassName('sign-in')[0];
    signin.style.display = "none";
});