<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
</head>
<body>

<table>
	<?php foreach( $users as $user ): ?>
	<tr>
		<td><?= $user['first_name']; ?></td>
		<td><?= $user['last_name']; ?></td>
	</tr>
	<?php endforeach;?>
</table>

</body>
</html>
