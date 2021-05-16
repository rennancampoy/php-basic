<main>
	<section>
		<a href="index.php">
			<button type="button" class="btn btn-warning">
				Voltar
			</button>
		</a>
	</section>

	<h2 class="mt-3"><?=TITLE?></h2>

	<form method="POST">

		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" value="<?php if (isset($client)) echo $client->getProp('name'); ?>">
		</div>

		<div class="form-group">
			<label>Age</label>
			<input type="number" class="form-control" name="age" value="<?php if (isset($client)) echo $client->getProp('age'); ?>">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="email" value="<?php if (isset($client)) echo $client->getProp('email'); ?>">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success">
				SAVE
			</button>
		</div>

	</form>
</main>