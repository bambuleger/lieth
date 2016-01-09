<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

    <?php the_title( sprintf('<h3 class="entry-tile"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );  
                                            ?>
    
    <?php if( has_post_thumbnail() ): ?>
        
        <div class="pull-left"><?php the_post_thumbnail('thumbnail'); ?></div>

    <?php endif; ?>
    
   <small>von <?php the_author(); ?> am <?php the_time( 'l, j. F Y' ); ?></small>
    
    <?php the_excerpt(); ?>
    
    <hr>

</article>