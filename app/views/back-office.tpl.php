<section class="container">
    <div class="row">
        <div class="col-12">
            <h3>Liste des commandes</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Numéro de commande</th>
                    <th>Date de dépôt</th>
                    <th>Date de reprise</th>
                    <th>Montant</th>
                    <th>Articles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($viewData['orderList'] as $orderObject): ?>
                    <tr>
                        <td><?php echo $orderObject->getId(); ?></td>
                        <td><?php echo $orderObject->getDepositDate(); ?></td>
                        <td><?php echo $orderObject->getRecoveryDate(); ?></td>
                        <td><?php echo $orderObject->getAmount(); ?> €</td>
                        <td>
                        <ul>
                            <li>Pantalon : <?php echo $orderObject->getPants(); ?></li>
                            <li>Chemise / t-shirt : <?php echo $orderObject->getShirt() ?></li>
                            <li>Manteau : <?php echo $orderObject->getCoat(); ?></li>
                            <li>Veste : <?php echo $orderObject->getJacket(); ?></li>
                            <li>Jupe : <?php echo $orderObject->getSkirt(); ?></li>
                        </ul>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3>Liste des utilisateurs</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Numéro de téléphone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($viewData['userList'] as $userObject): ?>
                    <tr>
                        <td><?php echo $userObject->getName(); ?></td>
                        <td><?php echo $userObject->getEmail(); ?></td>
                        <td><?php echo $userObject->getPhoneNumber(); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3>Liste des produits</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Nom</th>
                    <th>prix</th>
                    <th>Numéro de téléphone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($viewData['userList'] as $userObject): ?>
                    <tr>
                        <td><?php echo $userObject->getName(); ?></td>
                        <td><?php echo $userObject->getEmail(); ?></td>
                        <td><?php echo $userObject->getPhoneNumber(); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
