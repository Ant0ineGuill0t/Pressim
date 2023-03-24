const login = {
   init : function() {
      const loginButtonElement = document.querySelector('.login-button');
      var currentUrl = window.location.pathname;
      if (currentUrl === '/Pressim/public/login') {
      loginButtonElement.parentNode.style.display = 'none';
      } else {
      loginButtonElement.parentNode.style.display = 'block';
      }
      const alerts = document.querySelectorAll('.alert');
      alerts.forEach(alert => {
         setTimeout(() => {
            alert.remove();
         }, 5000);
         });
   },
}
