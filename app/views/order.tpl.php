<div class="container">
  <form>
    <div class="form-group">
      <label for="type-lavage">Type de lavage:</label>
      <select class="form-control" id="type-lavage">
        <option value="0">-- Sélectionnez un type de lavage --</option>
        <option value="1">Lavage chemise</option>
        <option value="2">Lavage pantalon</option>
        <option value="3">Lavage jupe</option>
        <option value="4">Lavage veste</option>
        <option value="5">Lavage manteau</option>
        <option value="6">Lavage couette</option>
      </select>
    </div>
    <div class="form-group">
      <label for="quantite">Quantité:</label>
      <input type="number" class="form-control" id="quantite" min="1" max="99">
    </div>
    <div class="form-group">
      <label for="date-depot">Date de dépôt:</label>
      <input type="date" class="form-control" id="date-depot" min="<?php echo date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
      <label for="date-retour">Date de retour:</label>
      <input type="text" class="form-control" id="date-retour" readonly>
    </div>
    <div class="form-group">
      <label for="prix-total">Prix total:</label>
      <input type="text" class="form-control" id="prix-total" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Passer la commande</button>
  </form>
</div>
