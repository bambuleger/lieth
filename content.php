 <!-- <div class="post_title"><?php the_title(); ?> <br />
    <small class="post_author">von <?php the_author(); ?> am <?php the_time( 'l, j. F Y' ); ?></small>
</div>
    <div class="thumbnail-img"><?php the_post_thumbnail(); ?></div>
    
    <div class="post_content"><?php the_content(); ?></div>
    <hr> -->

<?php the_title( sprintf('<h3 class="entry-tile"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );  
                                            ?>
<div class="thumbnail-img">
    <?php the_post_thumbnail( 'thumbnail' ); ?>
</div>
<small>von <?php the_author(); ?> am <?php the_time( 'l, j. F Y' ); ?></small>

<p><?php the_content(); ?></p>

<hr>