<?php
// Tableau associatif contenant les informations sur les différents types de vêtements
$vetements = array(
    "chemise" => array("label" => "Chemise", "prix" => 7),
    "pantalon" => array("label" => "Pantalon", "prix" => 8),
    "jupe" => array("label" => "Jupe", "prix" => 7),
    "veste" => array("label" => "Veste", "prix" => 10),
    "manteau" => array("label" => "Manteau", "prix" =>15)
);
$items = array_keys($vetements);
?>
<div class="container">
  <form action="" method="POST">
    <?php foreach ($vetements as $vetement => $info) { ?>
      <div class="form-group">
        <label>Lavage <?php echo $info["label"]; ?></label>
        <div class="btn-group d-flex" role="group" aria-label="Lavage <?php echo $info["label"]; ?>">
          <input type="radio" class="btn-check" name="<?php echo $vetement; ?>" id="lavage-<?php echo $vetement; ?>-0" value="0" data="0" autocomplete="off" checked>
          <label class="btn btn-outline-light" for="lavage-<?php echo $vetement; ?>-0">Pas de lavage</label>
          <?php for ($i = 1; $i <= 5; $i++) { ?>
            <input type="radio" class="btn-check" name="<?php echo $vetement; ?>" id="lavage-<?php echo $vetement; ?>-<?php echo $i; ?>" value=<?php echo $i ?> data="<?php echo $info["prix"] * $i; ?>" autocomplete="off">
            <label class="btn btn-outline-light" for="lavage-<?php echo $vetement; ?>-<?php echo $i; ?>">Lavage <?php echo $i; ?> <?php echo $info["label"]; ?> (<?php echo $info["prix"] * $i; ?> €)</label>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <div class="form-group">
      <label for="date-depot">Date de dépôt:</label>
      <input name="deposit-date" type="date" class="form-control" id="date-depot" min="<?php echo date('Y-m-d'); ?>" required>
    </div>

    <div class="form-group">
      <label for="date-retour">Date de retour:</label>
      <input name="recovery-date" type="text" class="form-control" id="date-retour" readonly>
    </div>

    <div class="form-group">
      <label>Prix total:</label>
      <input name="amount" type="text" class="form-control" id="total-price" readonly>
    </div>

    <button type="submit" class="btn btn-primary">Passer la commande</button>
  </form>
</div>

