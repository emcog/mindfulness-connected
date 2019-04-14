
    <?php $prevPost = get_previous_post();
        if($prevPost) {    ?>
        <div class="prev">
            <h3><a href="<?php the_permalink($prevPost->ID); ?>"><?php echo $prevPost->post_title; ?></a></h3>
            <p><?php echo wp_trim_words( $prevPost->post_content , '40' ); ?></p>     
             <a class="read-more" href="<?php the_permalink($prevPost->ID); ?>">More...</a>
        </div>
    <?php
               
        } // end if
         
        $nextPost = get_next_post();
        if($nextPost) {
       
    ?>
        <div class="next">
            <h3><a href="<?php the_permalink($nextPost->ID); ?>"><?php echo $nextPost->post_title; ?></a></h3>
            <p><?php echo wp_trim_words( $nextPost->post_content , '40' ); ?></p>     
             <a class="read-more" href="<?php the_permalink($nextPost->ID); ?>">More...</a>
        </div>
    <?php
              
        } // end if
    ?>
