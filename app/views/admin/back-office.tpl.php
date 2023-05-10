<section class="container">
    <div class="row">
        <div class="col-12">
            <h3>Liste des commandes</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Numéro de commande</th>
                    <th>Client</th>
                    <th>Date de création</th>
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
                        <td><?php echo $orderObject->getUserId(); ?></td>
                        <td><?php echo $orderObject->getCreatedAt(); ?></td>
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
                        <td class="text-end">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm-delete-<?= $orderObject->getId() ?>">supprimer</button>
                            <div class="modal fade" id="confirm-delete-<?= $orderObject->getId() ?>" tabindex="-1" aria-labelledby="confirm-delete-<?= $orderObject->getId() ?>-label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirm-delete-<?= $orderObject->getId() ?>-label">Confirmation de suppression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <a href="<?= $router->generate('order-delete',['id' => $orderObject->getId()]) ?>" class="btn btn-danger">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <td class="text-end">
                            <a href="<?= $router->generate('user-viewUpdate',['id' => $userObject->getId()]) ?>" class="btn btn-warning">modifier</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm-delete-<?= $userObject->getId() ?>">supprimer</button>
                            <div class="modal fade" id="confirm-delete-<?= $userObject->getId() ?>" tabindex="-1" aria-labelledby="confirm-delete-<?= $userObject->getId() ?>-label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirm-delete-<?= $userObject->getId() ?>-label">Confirmation de suppression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <a href="<?= $router->generate('user-delete',['id' => $userObject->getId()]) ?>" class="btn btn-danger">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($viewData['productList'] as $productObject): ?>
                    <tr>
                        <td><?php echo $productObject->getName(); ?></td>
                        <td><?php echo $productObject->getPrice(); ?></td>
                        <td class="text-end">
                            <a href="<?= $router->generate('product-viewUpdate',['id' => $productObject->getId()]) ?>" class="btn btn-warning">modifier</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm-delete-<?= $productObject->getId() ?>">supprimer</button>
                            <div class="modal fade" id="confirm-delete-<?= $productObject->getId() ?>" tabindex="-1" aria-labelledby="confirm-delete-<?= $productObject->getId() ?>-label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirm-delete-<?= $productObject->getId() ?>-label">Confirmation de suppression</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer ce produit ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <a href="<?= $router->generate('product-delete',['id' => $productObject->getId()]) ?>" class="btn btn-danger">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= $router->generate('product-add')?>" class="btn btn-warning">ajouter</a>
        </div>
    </div>
</section>
