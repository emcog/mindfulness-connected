<?php get_header(); ?>

	<main id="blog">

		<section>

			<div class="inner">

				<ul>
					<?php get_template_part('loop'); ?>
				</ul>

				<?php get_template_part('pagination'); ?>

			</div>

		</section>

	</main>

<?php get_footer(); ?>