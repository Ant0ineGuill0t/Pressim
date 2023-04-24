<section>
<div class="container">
		<h2 class="text-center mb-4">Modification service</h2>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?= $productData->getName(); ?>" required>
                    </div>
					<div class="form-group">
						<label for="price">Prix :</label>
						<input type="text" id="price" name="price" class="form-control" value="<?= $productData->getPrice(); ?>" required>
					</div>
					<div class="text-center">
						<input type="submit" value="Envoyer" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
    </div>
</section>