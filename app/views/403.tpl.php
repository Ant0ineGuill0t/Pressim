<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page introuvable</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #aca788;
        }
        
        .error-template {
            padding: 40px 15px;
            text-align: center;
        }
        
        .error-actions {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        
        @media (min-width: 768px) {
            .error-template {
                max-width: 600px;
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>Oups !</h1>
                    <h2>Erreur 403 - Accès interdit</h2>
                    <div class="error-details">
                        Désolé, vous de disposez pas des autorisations requises pour cette page.
                    </div>
                    <div class="error-actions">
                        <a href="<?= $router->generate('home'); ?>" class="btn btn-primary btn-lg">
                            <span class="glyphicon glyphicon-home"></span>
                            Retourner à l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>