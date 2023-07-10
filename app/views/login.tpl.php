<aside class="container login">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10">
      <form action="" method="POST">
      <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
        <h2>Connexion</h2>
        <p>Pour passer une commande sur Pressim, connectez-vous à votre compte. Cela vous permettra de sauvegarder vos informations de livraison pour une expérience d'achat plus rapide et plus facile.</p>
        <div class="form-group">
          <label for="email">Adresse mail:</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="adresse mail" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe:</label>
          <input name="password" type="password" class="form-control" id="password" autocomplete="new-password" placeholder="mot de passe" required>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
      </form>
      <div class="mt-3">
        <p>Vous n'avez pas de compte ? <a href="<?= $router->generate('account-add'); ?>">Créez-en un maintenant</a>.</p>
      </div>
    </div>
  </div>
</aside>
