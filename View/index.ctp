<?php 
if (!AuthComponent::user(null)) {
    echo $this -> Html -> link(
		'Login',
		array('controller' => 'users', 'action' => 'login')
	);
}
?>

<?php
if (AuthComponent::user('id')) {
	echo "Logged in as: " . AuthComponent::user('username') . "    ";
	echo $this -> Html -> link(
		'Logout',
		array('controller' => 'users', 'action' => 'logout')
	);
}
?>

<h1><font size="12px">Blog posts</font></h1>

<!-- Added next lines up to 'Add post' section in experimentally to try to get new user creation page to work -->

<?php echo $this -> Html -> link(
	'Add User',
	array('controller' => 'users', 'action' => 'add')
) . "   "; ?>
<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
		<th>Action</th>
        <th>Created</th>
		<th>By</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
				echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); 
			?>
        </td>
		<td>
			<?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $post['Post']['user_username']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>