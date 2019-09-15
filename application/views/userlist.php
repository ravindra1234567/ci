<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<?php include('bootstrap.php'); ?>
</head>
<body>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">First</th>
				<th scope="col">Last</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<th scope="row"><?= $user['id']?></th>
					<td><?= $user['firstname']?></td>
					<td><?= $user['lastname']?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>