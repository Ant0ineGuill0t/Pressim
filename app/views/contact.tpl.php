<section>
<div class="container">
		<h2 class="text-center mb-4">Page de contact</h2>
		<p class="text-center mb-5">N'hésitez pas à nous contacter pour toute question ou demande.</p>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form action="" method="POST">
				<input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
					<div class="form-group">
						<label for="nom">Nom :</label>
						<input type="text" id="nom" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email">Email :</label>
						<input type="email" id="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="message">Message :</label>
						<textarea id="message" name="message" class="form-control" rows="5" required></textarea>
					</div>
					<div class="text-center">
						<input type="submit" value="Envoyer" class="btn btn-primary">
					</div>
				</form>
				<div class="mt-5">
					<p class="text-center">Adresse : 1 place Marechal Juin, 35000 Rennes</p>
					<p class="text-center">Téléphone : 02 99 30 50 03</p>
					<p class="text-center">Email : pressim@contact.com</p>
				</div>
			</div>
		</div>
    </div>
</section>
