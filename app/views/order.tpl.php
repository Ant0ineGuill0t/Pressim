<?php 
  $prix_lavage = [
    "chemise" => 8,
    "pantalon" => 7,
    "jupe" => 7
  ];
?>
<div class="container">
  <form>
  <div class="form-group">
    <div class="btn-group" role="group" aria-label="Lavage Chemise">
      <input type="radio" class="btn-check" name="chemise" id="lavage-chemise-0" autocomplete="off"checked >
      <label class="btn btn-outline-light" for="lavage-chemise-0">Pas de lavage chemise </label>
      <?php for ($i = 1; $i <= 5; $i++) { ?>
        <input type="radio" class="btn-check" name="chemise" id="lavage-chemise-<?php echo $i; ?>" autocomplete="off">
        <label class="btn btn-outline-light" for="lavage-chemise-<?php echo $i; ?>">Lavage <?php echo $i; ?> chemise  (<?php echo $prix_lavage["chemise"] * $i; ?> euro)</label>
      <?php } ?>
    </div>
    <div class="btn-group" role="group" aria-label="Lavage Pantalon">
      <input type="radio" class="btn-check" name="pantalon" id="lavage-pantalon-0" autocomplete="off"checked >
      <label class="btn btn-outline-light" for="lavage-pantalon-0">Pas de lavage pantalon </label>
      <?php for ($i = 1; $i <= 5; $i++) { ?>
        <input type="radio" class="btn-check" name="pantalon" id="lavage-pantalon-<?php echo $i; ?>" autocomplete="off">
        <label class="btn btn-outline-light" for="lavage-pantalon-<?php echo $i; ?>">Lavage <?php echo $i; ?> pantalon  (<?php echo $prix_lavage["pantalon"] * $i; ?> euro)</label>
      <?php } ?>
    </div>
    <div class="btn-group" role="group" aria-label="Lavage Jupe">
      <input type="radio" class="btn-check" name="jupe" id="lavage-jupe-0" autocomplete="off"checked >
      <label class="btn btn-outline-light" for="lavage-jupe-0">Pas de lavage jupe </label>
      <?php for ($i = 1; $i <= 5; $i++) { ?>
        <input type="radio" class="btn-check" name="jupe" id="lavage-jupe-<?php echo $i; ?>" autocomplete="off">
        <label class="btn btn-outline-light" for="lavage-jupe-<?php echo $i; ?>">Lavage <?php echo $i; ?> jupe  (<?php echo $prix_lavage["jupe"] * $i; ?> euro)</label>
      <?php } ?>
    </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="lav-veste">
        <label class="form-check-label" for="lav-veste">
          Lavage veste (13€)
        </label>
        <input type="number" class="form-control" id="quantite-veste" min="0" max="5">
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="lav-manteau">
        <label class="form-check-label" for="lav-manteau">
          Lavage manteau (20€)
        </label>
        <input type="number" class="form-control" id="quantite-manteau" min="0" max="5">
      </div>
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
