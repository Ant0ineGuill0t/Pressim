<?php 

if(isset($_SESSION['errorMessages']) && !empty($_SESSION['errorMessages'])) {

    foreach($_SESSION['errorMessages'] as $errorMessage) : ?>

        <div class="alert alert-danger text-center" role="alert">
            <?= $errorMessage ?>
        </div>

    <?php
    endforeach;
    $_SESSION['errorMessages'] = [];
}
if(isset($_SESSION['successMessages']) && !empty($_SESSION['successMessages'])) {

    foreach($_SESSION['successMessages'] as $successMessage) : ?>

        <div class="alert alert-success text-center" role="alert">
            <?= $successMessage ?>
        </div>

    <?php
    endforeach;
    $_SESSION['successMessages'] = [];
}

