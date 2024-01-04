<?php /* Template Name: Facebook  Template */ ?>

<?php get_header(); ?>
<div class="menu-wrapper">
   <div class="ewt-wrapper">
        <div class="hero-area">
        
            <nav class="ewt-nav">
                <div class="ewt-nav-wrapper">
                    <div class="ewt-logo">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="">
                    </div>
                
               </div>
            </nav>


        </div>
    </div>
 </div>

<section class="pagesection">
        <div class="pagecontatentwrapper">
            
        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>



        </div>
       

</section>
				
<?php get_footer(); ?>
