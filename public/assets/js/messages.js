const messages = {
    init: function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
           setTimeout(() => {
              alert.remove();
           }, 5000);
           });
    }
}
window.addEventListener('load', function() {
    messages.init();
  });