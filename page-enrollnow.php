<?php /* Template Name: Enrollnow  Template */ ?>

<?php get_header(); ?>
<div class="page-margin-div">
   
 </div>
 <div class="whatsapp-description">
    <div class="whatsapp-description-wrapper">
        <div class="whatsapp-description-texts">
             <h1 class="normal-page-title"><?php the_title(); ?></h1>
             <div class="teacher-thumbnail">
                    <?php if ( has_post_thumbnail() ) :
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                            <img class="index-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
                     <?php endif; ?>

						
                    
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</div>
<div class="whatsapp-widgests">
    <div class="whatsapp-wiges-wrapper justify-center">
       <div class="degree-wrapper">
                <?php if (is_active_sidebar('ewt-enrollnow-page-degree-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-enrollnow-page-degree-sidebar-widget'); ?>

                <?php endif; ?>
        </div>       
    </div>
</div>				

				
<?php get_footer(); ?>
