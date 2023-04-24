<section>
<div class="container">
		<h2 class="text-center mb-4">Modification utilisateur</h2>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form action="" method="POST">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="name" class="form-control" value="<?= $userData->getName(); ?>" required>
                    </div>
					<div class="form-group">
						<label for="email">Email :</label>
						<input type="email" id="email" name="email" class="form-control" value="<?= $userData->getEmail(); ?>" required>
					</div>
					<div class="form-group">
						<label for="phone-number">Numéro de téléphone :</label>
						<input type="text" id="phone-number" name="phone-number" class="form-control" value="<?= $userData->getPhoneNumber(); ?>" required>
					</div>
					<div class="text-center">
						<input type="submit" value="Envoyer" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
    </div>
</section>