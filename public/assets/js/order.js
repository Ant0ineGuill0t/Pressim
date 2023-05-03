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
    const totalPriceInput = document.querySelector('#total-price');
    const inputs = document.querySelectorAll('input[type="radio"]');
  
    const handleUpdateTotalPrice = () => {
      let totalPrice = 0;
      inputs.forEach((input) => {
        if (input.checked) {
          totalPrice += parseInt(input.getAttribute("data"));
        }
      });
      totalPriceInput.value = totalPrice;
    };
  
    inputs.forEach((input) => {
      input.addEventListener('click', handleUpdateTotalPrice);
    });
  },
  
  
  handleRecoveryDate: function() {
    document.querySelector('#date-depot').addEventListener('change', function() {
      const depot = moment(this.value);
      let days = 0;
      let dateRetour = 0;
      let addDay = 0;
      while (days < 4) {
        dateRetour = depot.add(1, 'days');
        if (dateRetour.weekday() === 6 || dateRetour.weekday() === 0){
          addDay++;
        }
        days++;
      }
      dateRetour.add(addDay, 'days');
      if (dateRetour.weekday() === 6) { 
        dateRetour = dateRetour.add(2, 'days');
    } else if (dateRetour.weekday() === 0) {
        dateRetour = dateRetour.add(1, 'days');
    }
      document.querySelector('#date-retour').value = dateRetour.format('DD/MM/YYYY');
    });
  },
}
