const login = {

    init : function() {

        const loginButtonElement = document.querySelector('.login-button');
        loginButtonElement.addEventListener('click', login.handleLogin);
        const CloseButtonElement = document.querySelector('.close-button');
        CloseButtonElement.addEventListener('click', login.handleLogin);
    },

    show : function() {

        const LoginElement = document.querySelector('.login');
        LoginElement.classList.add('login--on');
    },

    handleLogin: function(event){
        event.preventDefault();

    }
}