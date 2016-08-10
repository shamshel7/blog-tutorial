<table>
	<tr>
		<th>Users</th>
		<th>Account type</th>
		<th>Registered</th>
		<th>No. of posts</th>
	</tr>
	
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['role']; ?></td>
		<td><?php echo $user['User']['created']; ?></td>
		<td><?php echo $user['User']['post_count']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>