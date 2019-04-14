<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <li>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php html5wp_excerpt('html5wp_index'); ?>

            <a class="read-more" href="<?php the_permalink(); ?>">More...</a>

        </article>

    </li>

<?php endwhile; ?>

<?php else: ?>

    <article>
        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    </article>

<?php endif; ?>