<?php get_header(); ?>

<main id="default">

    <section>

    	<div class="inner">

			<h1><?php the_title(); ?></h1>

	 		<?php the_field('default-content'); ?>	

	 	</div>

	</section>

</main>

<?php get_footer(); ?>