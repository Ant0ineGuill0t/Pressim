const login = {
   init : function() {
      loginButtonElement = document.querySelector('.login-button');
      if(loginButtonElement){
         login.handleLogin()
      }
   },
   handleLogin: function() {
      
      var currentUrl = window.location.pathname;
      if (currentUrl === '/Pressim/public/login' || currentUrl === '/Pressim/public/creation-compte') {
      loginButtonElement.parentNode.style.display = 'none';
      } else {
      loginButtonElement.parentNode.style.display = 'block';
      }
   }
}
