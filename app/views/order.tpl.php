<div class="container">
  <form action="" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
      <?php foreach ($products as $product) { ?>
      <div class="form-group">
        <label>Lavage <?php echo $product->getName(); ?></label>
        <div class="btn-group d-flex" role="group" aria-label="Lavage <?php echo $product->getName(); ?>">
          <input type="radio" class="btn-check" name="<?php echo $product->getName(); ?>" id="lavage-<?php echo $product->getName(); ?>-0" value="0" data="0" autocomplete="off" checked>
          <label class="btn btn-outline-light" for="lavage-<?php echo $product->getName(); ?>-0">Pas de lavage</label>
          <?php for ($i = 1; $i <= 5; $i++) { ?>
            <input type="radio" class="btn-check" name="<?php echo $product->getName(); ?>" id="lavage-<?php echo $product->getName(); ?>-<?php echo $i; ?>" value=<?php echo $i ?> data="<?php echo $product->getPrice() * $i; ?>" autocomplete="off">
            <label class="btn btn-outline-light" for="lavage-<?php echo $product->getName(); ?>-<?php echo $i; ?>">Lavage <?php echo $i; ?> <?php echo $product->getName(); ?> (<?php echo $product->getPrice() * $i; ?> €)</label>
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
