<?php /* Template Name: Facebook  Template */ ?>

<?php get_header(); ?>
<div class="page-margin-div">
   
 </div>
 <div class="whatsapp-description">
    <div class="whatsapp-description-wrapper">
        <div class="whatsapp-description-texts">
             <h1 class="normal-page-title"><?php the_title(); ?></h1>
             <div class="teacher-thumbnail">
						
                        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
                    
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</div>

				
<?php get_footer(); ?>
