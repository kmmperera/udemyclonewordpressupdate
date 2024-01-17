<?php get_header();?>

<div class="main-container">
	<div class="main-wrapper">

      
		<?php 
		global $wp_query;
		//var_dump($wp_query->query_vars);
		//var_dump($wp_query->query_vars["category_name"]);
		//var_dump(get_query_var('cat',0));
		$thiscat=$wp_query->query_vars["category_name"];
		$thiscatid=$wp_query->query_vars["cat"];

		?>

		<?php 

		$cat_query= new WP_Query(
			array(
				'post_type' => 'post',
				"posts_per_page" => 30,
				
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'terms' => $thiscat,
						'field' => 'slug',
					)
				)
			)   
			);
		
		?>
		<?php
			$cattype="";
			if(strpos($thiscat, 'timetables')!==FALSE){
				$cattype="timetables";
			}
			if(strpos($thiscat, 'books') !== FALSE){
				$cattype="books";
			}
			if(strpos($thiscat, 'teachers') !== FALSE){
				$cattype="teachers";
			}
			
		?>

	<h1 class="cat-description-h"><?php echo category_description($thiscatid)?></h1>
	<?php if( $cat_query->have_posts() ): ?>
    <div class="cat-section-wrapper">
       
          
        <div class="<?php echo $cattype ?> cat-type-cls">
            <?php while( $cat_query->have_posts() ): ?>
                <?php $cat_query->the_post(); ?>
                <div class="category-page-loop-all-wrapper">
                   
				   <h3 class="cat-result-post-title">  <?php the_title(); ?></h3>
				   <?php if ( has_post_thumbnail() ) :
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                            <img class="cat-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
                     <?php endif; ?>
				   <div class="cat-content-div">

				   <?php 
				   if($cattype === "timetable"):
				   the_content(); 
				   else:
					the_excerpt();
					?>
					<a href="<?php the_permalink(); ?>" class="read-more-link cat-read-more">
					<?php _e( 'Read More', 'ElegantWUni' );  ?>
					</a>
					<?php 
				   endif;
				   ?>

				   </div>
                       
                </div>
            <?php endwhile; ?>
			<?php the_posts_pagination(); ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif;  ?>






	</div>
</div>
				
<?php get_footer();?>