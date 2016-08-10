<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>By: <?php echo $post['Post']['user_username']; ?></small></p>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>