<?php


get_header();
?>
<div class="search-page-top">
    
    <div class=" ewt-search-titile">
        <h1 ><?php _e( 'Search results for:', 'ElegantWUni' ); ?></h1>
        <div class="search-query"> <h1> <?php echo get_search_query(); ?></h1></div>    
           
              
                
            
    </div>
</div>

                <div class="search-results">
                    <div class="search-results-wrapper">
                        <?php if ( have_posts() ): ?>
                            <?php while( have_posts() ): ?>
                           
                                <?php the_post(); ?>
                                <div class="search-result">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="read-more-link">
                                        <?php _e( 'Read More', 'ElegantWUni' );  ?>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                            <?php the_posts_pagination(); ?>
                        <?php else: ?>
                            <p><?php _e( 'No Search Results found', 'ElegantWUni' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>


<?php get_footer(); ?>