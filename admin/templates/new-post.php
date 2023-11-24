<?php require __DIR__ . '/../../templates/header.php'; ?>
<h2>Crea un nuovo post</h2>

<?php if ( $error ): ?>
	<div class="error">
		Errore nel form.
	</div>
<?php endif; ?>

<form action="" method="post">
	<label for="title">Titolo (richiesto)</label>
	<input type="text" name="title" id="title" value="<?php echo htmlspecialchars( $title, ENT_QUOTES ); ?>">

	<label for="excerpt">Soggetto</label>
	<input type="text" name="excerpt" id="excerpt" value="<?php echo htmlspecialchars( $excerpt, ENT_QUOTES ); ?>">

	<label for="content">Contenuto (richiesto)</label>
	<textarea name="content" id="content" cols="30" rows="30"><?php echo htmlspecialchars( $content, ENT_QUOTES ); ?></textarea>

	<p>
		<input type="submit" name="submit-new-post" value="Nuovo Post">
	</p>
</form>
<?php require __DIR__ . '/../../templates/footer.php'; ?>
