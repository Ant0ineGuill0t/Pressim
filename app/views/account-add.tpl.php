<section class="container">
    <h2>Créer un compte</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="nom">Nom:</label>
        <input name="name" type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input name="mail" type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe:</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" autocomplete="new-password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirmer le mot de passe:</label>
        <input name="confirmed-password"type="password" class="form-control" id="confirm_password" placeholder="Confirmez votre mot de passe" autocomplete="new-password" required>
      </div>
      <div class="form-group">
        <label for="telephone">Numéro de téléphone:</label>
        <input name="phone-number" type="tel" class="form-control" id="telephone" placeholder="Entrez votre numéro de téléphone" required>
      </div>
      <button type="submit" class="btn btn-primary">Créer le compte</button>
    </form>
</section>
