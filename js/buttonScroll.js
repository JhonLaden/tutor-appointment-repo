const formLogin = document.getElementsByClassName('form-login')[0];
const createAccount = formLogin.getElementsByClassName('create-account')[0];

createAccount.addEventListener('click', function(){
    const loginMain = formLogin.getElementsByClassName('login-main')[0];
    const signin = formLogin.getElementsByClassName('sign-in')[0];

    loginMain.style.display = 'none';
    signin.style.display = 'block';
});
