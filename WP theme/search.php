<!--

Hello :)
This template is not used in this theme. I have left it here incase you wish to expand the theme later on.

<?php get_header(); ?>

	<main role="main">

		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
