
const learnerBtns = formLogin.getElementsByClassName('learner-btns')[0];
const learnerPrevBtn = learnerBtns.getElementsByClassName('prev-btn')[0];   
const learnerNextBtn = learnerBtns.getElementsByClassName('next-btn')[0];
const learnerFormPreview = formLogin.getElementsByClassName('learner-form-preview')[0];

learnerPrevBtn.addEventListener('click', function(){
    const learnerAccount = learnerFormPreview.getElementsByClassName('learner-account')[0];
    const learnerPersonalInformation = learnerFormPreview.getElementsByClassName('learner-personal-information')[0];
    const submitBtn = learnerBtns.getElementsByClassName('submit-btn')[0];

    learnerFormPreview.style.height = "auto";

    submitBtn.style.display = "none";
    learnerNextBtn.style.display = "flex";

    if(window.getComputedStyle(learnerPersonalInformation).getPropertyValue("display") == "flex"){
        learnerAccount.style.display = "flex";
        learnerPersonalInformation.style.display = "none";
    }else if(window.getComputedStyle(learnerAccount).getPropertyValue("display") == "flex"){
        const signin = formLogin.getElementsByClassName('sign-in')[0];
        const learnerForm = formLogin.getElementsByClassName('learner-form')[0];
        signin.style.display = "block";
        learnerForm.style.display = "none";
       
    }else if(window.getComputedStyle(learnerPersonalInformation).getPropertyValue("display") == "none"){
        const learnerGuardian = formLogin.getElementsByClassName('learner-guardian')[0];

        learnerPersonalInformation.style.display = "flex";
        learnerGuardian.style.display = "none";

        learnerFormPreview.style.height = "80%";
    }else{
        learnerPersonalInformation.style.display = "flex";
        learnerFormPreview.style.height = "80%";
    }
});

learnerNextBtn.addEventListener('click', function(){
    const learnerPersonalInformation = learnerFormPreview.getElementsByClassName('learner-personal-information')[0];
    learnerFormPreview.style.height = "auto";

    if(window.getComputedStyle(learnerPersonalInformation).getPropertyValue("display") == "none"){
        const learnerAccount = learnerFormPreview.getElementsByClassName('learner-account')[0];
        const submitBtn = learnerBtns.getElementsByClassName('submit-btn')[0];

        learnerPersonalInformation.style.display = "flex";
        learnerAccount.style.display = "none";
        learnerFormPreview.style.height = "80%";

    
    }else if(window.getComputedStyle(learnerPersonalInformation).getPropertyValue("display") == "flex"){

        const learnerGuardian = learnerFormPreview.getElementsByClassName('learner-guardian')[0];
        const submitBtn = learnerBtns.getElementsByClassName('submit-btn')[0];

        learnerPersonalInformation.style.display = "none";
        learnerGuardian.style.display = "flex";
        
        submitBtn.style.display = "block";
        learnerFormPreview.style.height = "80%";
        learnerNextBtn.style.display = "none";

        submitBtn.addEventListener('click', function(){
            const learnerForm = formLogin.getElementsByClassName('learner-form')[0];
            learnerForm.submit();
            formLogin.style.display = "none";
            
        }); 
    }
});

