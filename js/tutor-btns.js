const tutorBtns = formLogin.getElementsByClassName('tutor-btns')[0];
const tutorPrevBtn = tutorBtns.getElementsByClassName('prev-btn')[0];
const tutorNextBtn = tutorBtns.getElementsByClassName('next-btn')[0];
const tutorFormPreview = formLogin.getElementsByClassName('tutor-form-preview')[0];

tutorPrevBtn.addEventListener('click', function(){
    const tutorAccount = tutorFormPreview.getElementsByClassName('tutor-account')[0];
    const tutorPersonalInformation = tutorFormPreview.getElementsByClassName('tutor-personal-information')[0];
    const submitBtn = tutorBtns.getElementsByClassName('submit-btn')[0];

    tutorFormPreview.style.height = "auto";

    submitBtn.style.display = "none";
    tutorNextBtn.style.display = "block";

    if(window.getComputedStyle(tutorPersonalInformation).getPropertyValue("display") == "flex"){
        tutorAccount.style.display = "flex";
        tutorPersonalInformation.style.display = "none";
    }else if(window.getComputedStyle(tutorAccount).getPropertyValue("display") == "flex"){
        const signin = formLogin.getElementsByClassName('sign-in')[0];
        const tutorForm = formLogin.getElementsByClassName('tutor-form')[0];
        signin.style.display = "block";
        tutorForm.style.display = "none";
       
    }else{
        tutorPersonalInformation.style.display = "flex";
        tutorFormPreview.style.height = "80%";
    }
});

tutorNextBtn.addEventListener('click', function(){
    const tutorPersonalInformation = tutorFormPreview.getElementsByClassName('tutor-personal-information')[0];
    tutorFormPreview.style.height = "auto";

    if(window.getComputedStyle(tutorPersonalInformation).getPropertyValue("display") == "none"){
        const tutorAccount = tutorFormPreview.getElementsByClassName('tutor-account')[0];
        const submitBtn = tutorBtns.getElementsByClassName('submit-btn')[0];

        tutorPersonalInformation.style.display = "flex";
        tutorAccount.style.display = "none";
        submitBtn.style.display = "block";

        tutorFormPreview.style.height = "80%";
        tutorNextBtn.style.display = "none";
        

        submitBtn.addEventListener('click', function(){
            const tutorForm = formLogin.getElementsByClassName('tutor-form')[0];
            tutorForm.submit();
            formLogin.style.display = "none";
            
        }); 
    }
});

