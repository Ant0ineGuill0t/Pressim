const order = {
  init : function() {
    const items = ['chemise', 'pantalon', 'jupe', 'veste', 'manteau'];
    const inputs = {};
    const totalPriceSpan = document.querySelector('#total-price');
    items.forEach((item) => {
      inputs[item] = document.querySelectorAll(`input[name="${item}"]`);
      inputs[item].forEach((input) => {
        input.addEventListener('click', updateTotalPrice);
      });
    });

    function updateTotalPrice() {
      let totalPrice = 0;
      items.forEach((item) => {
        let selectedValue = 0;
        inputs[item].forEach((input) => {
          if (input.checked) {
            selectedValue = parseInt(input.value);
          }
        });
        totalPrice += selectedValue;
      });
      totalPriceSpan.textContent = totalPrice;
    }
    document.querySelector('#date-depot').addEventListener('change', function() {
      const depot = moment(this.value);
      let dateRetour = depot.add(4, 'days');
      while (dateRetour.weekday() === 6 || dateRetour.weekday() === 0) {
        dateRetour = dateRetour.add(1, 'days');
      }
      document.querySelector('#date-retour').value = dateRetour.format('DD/MM/YYYY');
    });
  }
}