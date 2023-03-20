<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pressim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $viewData['baseUri']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $viewData['baseUri']; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $viewData['baseUri']; ?>/assets/css/styles.css">
  </head>
<body>
  <header>
    <section class="container">
      <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="<?= $router->generate('home'); ?>">
          <img src="" alt="Logo de l'entreprise" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= $router->generate('home'); ?>">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $router->generate('benefits'); ?>">Prestations</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-primary login-button">Connexion</button>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <aside class="container login">
      <button class="close-button btn" aria-label="Fermer" type="button">&Cross;</button>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
          <form>
            <h2>Connexion</h2>
            <div class="form-group">
              <label for="email">Adresse mail:</label>
              <input type="email" class="form-control" id="email" placeholder="adresse mail">
            </div>
            <div class="form-group">
              <label for="password">Mot de passe:</label>
              <input type="password" class="form-control" id="password" placeholder="mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </form>
        </div>
      </div>
    </aside>
  </header>
