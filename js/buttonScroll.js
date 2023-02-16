
const formLogin = document.getElementsByClassName('form-login')[0];
const join = document.getElementsByClassName('join');
const createAccount = formLogin.getElementsByClassName('create-account')[0];
const formLoginXBtn = formLogin.getElementsByClassName('form-login-x-btn')[0];


for(var i = 0; i < join.length; i++){
    join[i].addEventListener('click', function(){
        const disablerBg = document.getElementsByClassName('disabled-bg')[0];
        const body = document.getElementsByTagName('body')[0];

        body.style.overflow = "hidden";
        formLogin.style.display = 'flex';
        disablerBg.style.display = 'block';
    });
}

createAccount.addEventListener('click', function(){
    const signIn = formLogin.getElementsByClassName('sign-in')[0];
    const loginMain = formLogin.getElementsByClassName('login-main')[0];

    signIn.style.display = "block";
    loginMain.style.display = "none";
})

formLoginXBtn.addEventListener('click', function(){
    const disablerBg = document.getElementsByClassName('disabled-bg')[0];
    const body = document.getElementsByTagName('body')[0];

    body.style.overflow = "scroll";
    formLogin.style.display = 'none';
    disablerBg.style.display = 'none';
} );