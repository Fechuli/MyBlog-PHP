<?php require __DIR__ . '/../../templates/header.php'; ?>

<?php if ( isset( $_GET['success'] ) ): ?>
	<div class="success">
		Il post e' stato creato con successo.
	</div>
<?php endif; ?>

<table>
	<?php foreach ( $all_posts as $post ): ?>
		<tr>
			<td><?php echo $post['title']; ?></td>
			<td><a href="<?php echo SITE_URL . '/admin?action=list-posts&delete-post=' . $post['id'] ?>&hash=<?php echo generate_hash( 'delete-post-' . $post['id'] ); ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<?php require __DIR__ . '/../../templates/footer.php'; ?>
