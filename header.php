<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>css/style.css" type="text/css" />
	<?php wp_head()?>
</head>

<body>
	<nav>
		<a href="#"><?php bloginfo('name') ?></a>
		<a href="#"><?php bloginfo('description') ?></a>
		<a href="#"><?php wp_page_menu('show_home=1') ?></a>
	</nav>

	<h1>Hello World</h1>

	<header>
		<aside>
			<?php get_sidebar()?>
		</aside>
	</header>
</body>

</html>
