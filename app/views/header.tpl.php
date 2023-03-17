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
            <li class="nav-item active">
              <a class="nav-link" href="<?= $router->generate('home'); ?>">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $router->generate('benefits'); ?>">Prestations</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-primary">Connexion</button>
            </li>
          </ul>
        </div>
      </nav>
    </section>
  </header>
