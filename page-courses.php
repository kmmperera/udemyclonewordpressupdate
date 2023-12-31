<?php /* Template Name: Courses  Template */ ?>

<?php get_header();?>
<div class="menu-wrapper">
   <div class="ewt-wrapper">
        <div class="hero-area">
        
            <nav class="ewt-nav">
                <div class="ewt-nav-wrapper">
                    <div class="ewt-logo">
                      <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png'?>" alt="">
                    </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location'    => 'top-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'ewt-top-menu',
                        'container_id'      => 'ewt-top-menu-id',
            
            
                    )
                );
                ?>
               </div>
            </nav>


        </div>
    </div>
 </div>

<section class="pagesection">
        <div class="pagecontatentwrapper">
            
        <h1><?php the_title();?></h1>

        <?php if( have_posts() ): while( have_posts() ): the_post();?>

            <?php the_content();?>

        <?php endwhile; else: endif;?>



        </div>
        <div class="courses-widget-div">
                <?php if( is_active_sidebar('ewt-courses-widget') ):?>
                        
                        <?php dynamic_sidebar('ewt-courses-widget');?>

                <?php endif;?>

        </div>

</section>
				
<?php get_footer();?>
