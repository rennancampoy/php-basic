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
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php	foreach ($clients as $client): ?>
				<tr>
					<td><?= $client->getProp('id'); ?></td>
					<td><?= $client->getProp('name'); ?></td>
					<td><?= $client->getProp('age'); ?></td>
					<td><?= $client->getProp('email'); ?></td>
					<td>
						<a href="edit.php?id=<?php echo $client->getProp('id'); ?>">
							<button type="button" class="btn btn-primary">
								Edit
							</button>
						</a>

						<a href="delete.php?id=<?php echo $client->getProp('id'); ?>">
							<button type="button" class="btn btn-danger">
								Delete
							</button>
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</section>
</main>