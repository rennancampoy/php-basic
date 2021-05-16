<main>
	<section>
		<a href="register.php">
			<button type="button" class="btn btn-success">
				New Client
			</button>
		</a>
	</section>

	<section>
		<table class="table bg-light mt-3">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php	foreach ($clients as $client): ?>
				<tr>
					<td><?= $client->getProp('id'); ?></td>
					<td><?= $client->getProp('name'); ?></td>
					<td><?= $client->getProp('age'); ?></td>
					<td><?= $client->getProp('email'); ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</section>
</main>