<?php get_header();?>

<div class="main-container">
	<div class="main-wrapper">

      
		

	
	<?php if( have_posts() ): ?>
   
       
          
        
            <?php while(have_posts() ): ?>
                <?php the_post(); ?>
                <div class="index-page-loop-all-wrapper">
                   
				   <h1>  <?php the_title(); ?></h1>
				   <?php if ( has_post_thumbnail() ) :
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                            <img class="index-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
                     <?php endif; ?>
				   <div class="index-content-div">

				   <?php 
				  
					the_excerpt();
					?>
					<a href="<?php the_permalink(); ?>" class="read-more-link ">
					<?php _e( 'Read More', 'ElegantWUni' );  ?>
					</a>
					<?php 
				   endif;
				   ?>

				   </div>
                       
                </div>
            <?php endwhile; ?>
			

           
        </div>
    </div>
<?php endif;  ?>






	</div>
</div>
				
<?php get_footer();?>