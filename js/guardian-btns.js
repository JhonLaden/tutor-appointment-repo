const guardianBtns = formLogin.getElementsByClassName('guardian-btns')[0];
const guardianPrevBtn = guardianBtns.getElementsByClassName('prev-btn')[0];
const guardianNextBtn = guardianBtns.getElementsByClassName('next-btn')[0];
const guardianFormPreview = formLogin.getElementsByClassName('guardian-form-preview')[0];

guardianPrevBtn.addEventListener('click', function(){
    const guardianAccount = guardianFormPreview.getElementsByClassName('guardian-account')[0];
    const guardianPersonalInformation = guardianFormPreview.getElementsByClassName('guardian-personal-information')[0];
    const submitBtn = guardianBtns.getElementsByClassName('submit-btn')[0];

    guardianFormPreview.style.height = "auto";

    submitBtn.style.display = "none";
    guardianNextBtn.style.display = "block";

    if(window.getComputedStyle(guardianPersonalInformation).getPropertyValue("display") == "flex"){
        guardianAccount.style.display = "flex";
        guardianPersonalInformation.style.display = "none";
    }else if(window.getComputedStyle(guardianAccount).getPropertyValue("display") == "flex"){
        const signin = formLogin.getElementsByClassName('sign-in')[0];
        const guardianForm = formLogin.getElementsByClassName('tutor-form')[0];
        signin.style.display = "block";
        guardianForm.style.display = "none";
       
    }else{
        guardianPersonalInformation.style.display = "flex";
        guardianFormPreview.style.height = "80%";
    }
});

guardianNextBtn.addEventListener('click', function(){
    const guardianPersonalInformation = guardianFormPreview.getElementsByClassName('tutor-personal-information')[0];
    guardianFormPreview.style.height = "auto";

    if(window.getComputedStyle(guardianPersonalInformation).getPropertyValue("display") == "none"){
        const guardianAccount = guardianFormPreview.getElementsByClassName('guardian-account')[0];
        const submitBtn = guardianBtns.getElementsByClassName('submit-btn')[0];

        guardianPersonalInformation.style.display = "flex";
        guardianAccount.style.display = "none";
        submitBtn.style.display = "block";

        guardianFormPreview.style.height = "80%";
        guardianNextBtn.style.display = "none";
        

        submitBtn.addEventListener('click', function(){
            const guardianForm = formLogin.getElementsByClassName('tutor-form')[0];
            guardianForm.submit();
            formLogin.style.display = "none";
            
        }); 
    }
});

