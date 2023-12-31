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
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'ewt-top-menu',
                        'container_id' => 'ewt-top-menu-id',


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
            
        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>



        </div>
        <div class="facebook-widget-div">
                <?php if (is_active_sidebar('ewt-facebook-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-facebook-widget'); ?>

                <?php endif; ?>

        </div>



                  <div class="swiper-container">
                            <div class="swiper courses-swiper-one">
                                <div class="swiper-wrapper">
                                    
                                            <?php if (is_active_sidebar('ewt-courses-slider-one-widget')) : ?>
                        
                                             <?php dynamic_sidebar('ewt-courses-slider-one-widget'); ?>

                                             <?php endif; ?>

                                     
                                </div>
                            </div>

                            <div class="courses-one-custom-button-prev arrow-buttons-style">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="courses-one-custom-button-next arrow-buttons-style">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                  </div>
        <div class="courses-one-widget-div">
              

        </div>
        <div class="tabs-widget-test">
        
        <?php if (is_active_sidebar('ewt-tabs-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-tabs-sidebar-widget'); ?>

                        <?php endif; ?>
        </div>

</section>
				
<?php get_footer(); ?>
