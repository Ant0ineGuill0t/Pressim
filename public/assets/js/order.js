const order = {
  init: function() {
    var currentUrl = window.location.pathname;
    if (currentUrl === '/Pressim/public/depot'){
      var depositDate = document.querySelector('#date-depot');
      order.handleTotalPrice();
      if (depositDate) {
        order.handleRecoveryDate();
        depositDate.addEventListener('change', function() {
          var selectedDate = new Date(this.value);
          var selectedDay = selectedDate.getDay();
          if (selectedDay === 0 || selectedDay === 6) {
            alert('Le pressim est fermé le samedi et le dimanche.');
            this.value = '';
            document.querySelector('#date-retour').value = '';
          }
        });
      }
    }
  },
      
  handleTotalPrice: function() {
    const items = ['chemise', 'pantalon', 'jupe', 'veste', 'manteau'];
    const inputs = {};
    const totalPriceInput = document.querySelector('#total-price'); 
    
    const handleUpdateTotalPrice = () => {
      let totalPrice = 0;
      items.forEach((item) => {
        let selectedData = 0;
        inputs[item].forEach((input) => {
          if (input.checked) {
            selectedData = parseInt(input.getAttribute("data"));
          }
        });
        totalPrice += selectedData;
      });
      totalPriceInput.value = totalPrice;
    };
    
    items.forEach((item) => {
      inputs[item] = document.querySelectorAll(`input[name="${item}"]`);
      inputs[item].forEach((input) => {
        input.addEventListener('click', handleUpdateTotalPrice);
      });
    });
  },

  handleRecoveryDate: function() {
    document.querySelector('#date-depot').addEventListener('change', function() {
      const depot = moment(this.value);
      let dateRetour = depot.add(4, 'days');
      while (dateRetour.weekday() === 6 || dateRetour.weekday() === 0) {
        dateRetour = dateRetour.add(1, 'days');
      }
      document.querySelector('#date-retour').value = dateRetour.format('DD/MM/YYYY');
    });
  },
}
