const login = {

    init : function() {

        const loginButtonElement = document.querySelector('.login-button');
        loginButtonElement.addEventListener('click', login.handleLogin);
        const CloseButtonElement = document.querySelector('.close-button');
        CloseButtonElement.addEventListener('click', login.handleLogin);
    },

    handleLogin: function(event){
        event.preventDefault();
        const LoginElement = document.querySelector('.login');
        LoginElement.classList.toggle('login--on');
    },


}