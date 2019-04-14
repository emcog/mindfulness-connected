<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/lib/img/favicon.ico" type="image/x-icon">

        <?php wp_head(); ?>
        <script src="https://use.typekit.net/bhs1pmj.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
				<?php include_once("analyticstracking.php") ?>

	</head>
	<body <?php body_class(); ?>>

        <header class="sticky">

            <div class="inner cf">

                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php the_field('theme-logo', 'option'); ?>" alt="Mindfulness 4 Change" /></a>
                </div>

                <nav id="main">
                	<?php if (has_nav_menu('main-menu')) wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'main-menu')); ?>
                </nav>

            </div>

        </header>
