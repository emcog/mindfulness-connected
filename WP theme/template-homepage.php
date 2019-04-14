<?php /* Template Name: Homepage template */ get_header(); ?>

	<main id="homepage">

		<section id="feature" style="background:url('<?php the_field('homepage-feature-image'); ?>');">
			<div class="inner cf">
				<div class="content content-box <?php the_field('homepage-feature-align'); ?>" style="color:<?php the_field('homepage-feature-color'); ?>;">
					<h1><?php the_field('homepage-feature-title'); ?></h1>
					<?php the_field('homepage-feature-content'); ?>
				</div>
			</div>
		</section>

		<section id="content-block">
<?php if( have_rows('homepage-content-block') ): ?>
			<ul class="block">
<?php while( have_rows('homepage-content-block') ): the_row();
	$image = get_sub_field('image');
	$title = get_sub_field('title');
	$content = get_sub_field('content');
	$color = get_sub_field('color');
	$alignment = get_sub_field('alignment');
	$id = get_sub_field('section-id');
?>
				<li id="<?php echo $id; ?>" style="background:url('<?php echo $image ?>'); color: <?php echo $color; ?>">
					<div class="inner cf">
						<div class="content content-box <?php echo $alignment; ?>">
							<?php echo $content; ?>
						</div>
					</div>
				</li>
<?php endwhile; ?>
			</ul>
<?php endif; ?>
		</section>

		<section id="approach">
			<div class="heading">
				<div class="inner">
					<h2><?php the_field('homepage-approach-title'); ?></h2>
					<?php the_field('homepage-approach-intro'); ?>
				</div>
			</div>
			<div class="content">
				<div class="inner">
					<?php the_field('homepage-approach-content'); ?>
				</div>
			</div>
		</section>

		<section id="timeline">

			<div class="content">
				<div class="inner">

					<div class="intro">
						<h2><?php the_field('homepage-timeline-title'); ?></h2>
						<?php the_field('homepage-timeline-intro'); ?>
					</div>

					<div class="box first">

						<div>

							<div class="image">
								<img src="<?php the_field('homepage-timeline-box-0-image'); ?>">
							</div>

							<div class="details">
                                <h2><?php the_field('homepage-timeline-box-0-date'); ?>: <?php the_field('homepage-timeline-caption-0'); ?></h2>
								<h3><?php the_field('homepage-timeline-box-0-title'); ?></h3>
								<?php the_field('homepage-timeline-box-0-content'); ?>
							</div>

						</div>

					</div>

					<div class="box animate">

						<div>

							<div class="image">
								<img src="<?php the_field('homepage-timeline-box-1-image'); ?>">
							</div>

							<div class="details">
																<h2><?php the_field('homepage-timeline-box-1-date'); ?>: <?php the_field('homepage-timeline-caption-1'); ?></h2>
								<h3><?php the_field('homepage-timeline-box-1-title'); ?></h3>
								<?php the_field('homepage-timeline-box-1-content'); ?>
							</div>

						</div>

					</div>

<!---->
					<div class="box animate">

						<div>

							<div class="image">
								<img src="<?php the_field('homepage-timeline-box-2-image'); ?>">
							</div>

							<div class="details">
                                <h2><?php the_field('homepage-timeline-box-2-date'); ?>: <?php the_field('homepage-timeline-caption-2'); ?></h2>
								<h3><?php the_field('homepage-timeline-box-2-title'); ?></h3>
								<?php the_field('homepage-timeline-box-2-content'); ?>
							</div>

						</div>

					</div>

<!---->

					<div class="box animate">

						<div>

							<div class="image">
								<img src="<?php the_field('homepage-timeline-box-3-image'); ?>">
							</div>

							<div class="details">
                                <h2><?php the_field('homepage-timeline-box-3-date'); ?>: <?php the_field('homepage-timeline-caption-3'); ?></h2>
								<h3><?php the_field('homepage-timeline-box-3-title'); ?></h3>
								<?php the_field('homepage-timeline-box-3-content'); ?>
							</div>

						</div>

					</div>

					<div class="row cf">

						<div class="left-col">

							<div class="box animate">

								<div>

									<div class="image">
										<img src="<?php the_field('homepage-timeline-box-4-image'); ?>">
									</div>

									<div class="details">
                                        <h2><?php the_field('homepage-timeline-box-4-date'); ?>: <?php the_field('homepage-timeline-caption-4'); ?></h2>
										<h3><?php the_field('homepage-timeline-box-4-title'); ?></h3>
										<?php the_field('homepage-timeline-box-4-content'); ?>
									</div>

								</div>

							</div>

						</div>

						<div class="right-col">

							<div class="box last animate">

								<div>

									<div class="image">
										<img src="<?php the_field('homepage-timeline-box-5-image'); ?>">
									</div>

									<div class="details">
                                        <h2><?php the_field('homepage-timeline-box-5-date'); ?>: <?php the_field('homepage-timeline-caption-5'); ?></h2>
										<h3><?php the_field('homepage-timeline-box-5-title'); ?></h3>
										<?php the_field('homepage-timeline-box-5-content'); ?>
									</div>

								</div>

							</div>

							</div>

						</div>

					</div>

				</div>
			</div>
		</section>

		<section id="team">
			<div class="heading">
				<div class="inner">
					<h2><?php the_field('homepage-team-title'); ?></h2>
					<?php the_field('homepage-team-intro'); ?>
				</div>
			</div>
			<div class="content">
				<div class="inner cf">
<?php if( have_rows('homepage-team-members') ): ?>
					<ul class="team cf">
<?php while( have_rows('homepage-team-members') ): the_row();
	$image = get_sub_field('profile-image');
	$name = get_sub_field('name');
	$position = get_sub_field('position');
	$content = get_sub_field('content');
?>

						<li>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class="inner level">
								<h3><?php echo $name; ?></h3>
								<h4><?php echo $position; ?></h4>
								<?php echo $content; ?>
							</div>
						</li>
<?php endwhile; ?>
					</ul>
<?php endif; ?>
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="heading">
				<div class="inner">
					<h2><?php the_field('homepage-contact-title'); ?></h2>
					<?php the_field('homepage-contact-intro'); ?>
				</div>
			</div>
			<div class="content">
				<div class="inner cf">
					<?php echo do_shortcode('[contact-form-7 id="52" title="Homepage"]'); ?>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
