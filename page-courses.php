<?php /* Template Name: Courses  Template */ ?>




<?php get_header(); ?>


<div class="pagesection">
        <div class="pagecontatentwrapper">
            
        <h1 class="ewt-page-title"><?php the_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>



        </div>
       

</div>


<div class="whatsapp-description">
    <div class="whatsapp-description-wrapper">
        <div class="whatsapp-description-texts">
            <h1>අපගේ පාඨමාලා සියල්ල පහතින්.....
            </h1>
            <p>
            අපගේ පාඨමාලා සියල්ල පහත තීරුවෙ දක්වා ඇත.විස්තර දැන ගැනිම සදහා ලින්ක් මත ක්ලික් කරන්න 
            </p>
        </div>
    </div>
</div>



<div class="courses-page-widget-area-div">
        <div class="courses-page-widget-area-wrapper justify-center">
            
        
                <?php if( is_active_sidebar('ewt-courses-widget') ):?>
                        
                        <?php dynamic_sidebar('ewt-courses-widget');?>

                <?php endif;?>

        </div>

</div>

<?php get_footer(); ?>





				

