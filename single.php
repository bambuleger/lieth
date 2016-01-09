<?php get_header(); ?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 header">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 sidebar">
            <!--<?php wp_nav_menu(array('theme_location'=>'primary')); ?>-->
            <?php 
                wp_nav_menu(array(
                'theme_location'=>'primary',   // This will be different for you. 
                'container_id' => 'cssmenu', 
                'walker' => new CSS_Menu_Maker_Walker()
                )); 
            ?>
        </div>
        <div class="col-md-6">
            <div class="row">
                <!-- <div class="col-md-12 mainslid"> -->
                    
                    <!-- Letzten 3 Posts -->
                    <!--<?php
                        $args = array(
                            'type' => 'post', 
                            'posts_per_page' => 3,
                        );
                        $lastBlog = new WP_Query($args);

                        if( $lastBlog->have_posts() ):
                            while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                                <div class="col-xs-12 col-sm-4">
                                    <?php get_template_part('content', 'featured'); ?>
                                </div>
                            <?php endwhile;
                        endif;

                        wp_reset_postdata();
                    ?>-->
                    
                    

                    
                    <div id="lieth-slider" class="carousel slide" data-ride="carousel">
                      
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
    
                        <!-- Nur Slider Kategorie 
                        category__in => array(1,2,3)
                        category__not_in => array(4,5,6)
                        -->
                        <?php
                            $args = array(
                                'type' => 'post', 
                                'posts_per_page' => 3,
                                'cat' => 9,
                            );
                            $lastBlog = new WP_Query($args);

                            if( $lastBlog->have_posts() ):
                                
                                $count = 0;
                                $bullets = '';
                                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                                    <div class="item <?php if($count == 0): echo 'active'; endif; ?>">
                                        <?php the_post_thumbnail( 'full' ); ?>
                                        <div class="carousel-caption">
                                            <?php the_title( sprintf('<h3 class="entry-tile"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );  
                                            ?>
                                        </div>
                                    </div>              

                                    <?php $bullets .= '<li data-target="#lieth-slider" data-slide-to="'.$count.'" class="'; ?>
                                        <?php if($count == 0): $bullets .='active'; endif; ?>                            
                                         <?php  $bullets .= '"></li>'; 
                                    ?>

                                <?php $count++; endwhile;
                            endif;

                            wp_reset_postdata();
                        ?>

                        <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <?php echo $bullets; ?>
                      </ol>
                    </div>
                        

                      <!-- Controls -->
                      <a class="left carousel-control" href="#lieth-slider" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#lieth-slider" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>


                <!-- </div> -->
            </div>
            <div class="row">
                <div class="col-md-12 maincont">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <?php 
                        if( have_posts() ):
            
                            while( have_posts() ): the_post(); ?>
                
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                                 <?php the_title('<h1 class="entry-title">','</h1>' ); ?>
                    
                                    <?php if( has_post_thumbnail() ): ?>
                        
                                        <div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
                
                                    <?php endif; ?>
                    
                                <small>von <?php the_author(); ?> am <?php the_time( 'l, j. F Y' ); ?></small>
                    
                                <?php the_content(); ?>
                        
                                <p>&nbsp;</p>
                    
                                </article>

                            <?php endwhile;
                            
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>
  </body>
</html>