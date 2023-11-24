<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MyBlog PHP</title>
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>../assets/style.css">
</head>
<body>

<nav id="site-navigation" role="navigation" class="row row-center">
	<div class="column">
		<h1>
			<a href="index.php">MyBlog PHP </a>
		</h1>
		<ul class="main-menu column clearfix">
			<li><a href="<?php echo SITE_URL; ?>/index.php">Blog</a></li>
			<?php if ( is_logged_in() ): ?>
				<li><a href="<?php echo SITE_URL; ?>?logout=true">Logout</a></li>
				<li><a href="<?php echo SITE_URL; ?>/admin">Amministrazione</a></li>
			<?php else: ?>
				<li><a href="<?php echo SITE_URL; ?>/login.php">Login</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>

<div id="content" />
