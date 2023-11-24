<?php require( 'init.php' ) ?>
<?php
$error = false;

if ( isset( $_POST['submit-login'] ) ) {
	if ( ! check_hash( 'login', $_POST['hash'] ) ) {
		die( 'Non è consentito l\' hacking' );
	}

	if ( ! login( $_POST['username'], $_POST['password'] ) ) {
		$error = true;
	}
}

if ( is_logged_in() ) {
	redirect_to( 'index.php' );
}

?>

<?php require( 'templates/header.php' ); ?>

<h2>Login</h2>

<?php if ( $error ): ?>
	<div class="error"><?php echo "User or password error." ?></div>
<?php endif; ?>

<form action="" method="post">
	<label for="username">User</label>
	<input type="text" name="username" id="username">

	<label for="password">Password</label>
	<input type="password" name="password" id="password">

	<input type="hidden" name="hash" value="<?php echo htmlspecialchars( generate_hash( 'login' ), ENT_QUOTES ); ?>">

	<p>
		<input type="submit" name="submit-login" value="Login">
	</p>
</form>

<?php require( 'templates/footer.php' ); ?>
