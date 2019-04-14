<?php get_header(); ?>

<main id="blog-single">

    <section>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php if( get_field('blog-hero') ): ?>

    <?php 
        $image = get_field('blog-hero');
        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endif; ?>

<?php endif; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h1><?php the_title(); ?></h1>

           <?php the_content(); ?>

        </article>

        <div class="blog-nav">
            <?php get_template_part( 'blog-pagination' ); ?>
        </div>

<?php endwhile; ?>

<?php else: ?>

        <article>
            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

        </article>

<?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>