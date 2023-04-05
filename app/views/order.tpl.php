<?php
// Tableau associatif contenant les informations sur les différents types de vêtements
$vetements = array(
    "chemise" => array("label" => "Chemise", "prix" => 10),
    "pantalon" => array("label" => "Pantalon", "prix" => 15),
    "jupe" => array("label" => "Jupe", "prix" => 12),
    "veste" => array("label" => "Veste", "prix" => 20),
    "manteau" => array("label" => "Manteau", "prix" => 25)
);
$items = array_keys($vetements);
?>
<div class="container">
  <form>
  <div class="form-group">
  <?php foreach ($vetements as $vetement => $info) { ?>
    <div class="btn-group" role="group" aria-label="Lavage <?php echo $info["label"]; ?>">
        <input type="radio" class="btn-check" name="<?php echo $vetement; ?>" id="lavage-<?php echo $vetement; ?>-0" value="0" autocomplete="off" checked>
        <label class="btn btn-outline-light" for="lavage-<?php echo $vetement; ?>-0">Pas de lavage <?php echo $info["label"]; ?> </label>
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <input type="radio" class="btn-check" name="<?php echo $vetement; ?>" id="lavage-<?php echo $vetement; ?>-<?php echo $i; ?>" value="<?php echo $info["prix"] * $i; ?>" autocomplete="off">
            <label class="btn btn-outline-light" for="lavage-<?php echo $vetement; ?>-<?php echo $i; ?>">Lavage <?php echo $i; ?> <?php echo $info["label"]; ?>  (<?php echo $info["prix"] * $i; ?> euro)</label>
        <?php } ?>
    </div>
  <?php } ?>
    <div class="form-group">
      <label for="date-depot">Date de dépôt:</label>
      <input type="date" class="form-control" id="date-depot" min="<?php echo date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
      <label for="date-retour">Date de retour:</label>
      <input type="text" class="form-control" id="date-retour" readonly>
    </div>
    <p>Prix total : <span id="total-price"></span> €</p>
    <button type="submit" class="btn btn-primary">Passer la commande</button>
  </form>
</div>
