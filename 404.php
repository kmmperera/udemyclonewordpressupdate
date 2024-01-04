

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
            <h1>404 ERROR
            </h1>
            <p>
                The page you are searching for is not existed :) Please click on the below link to go back to home 
            </p>
        </div>
    </div>
</div>
<div class="whatsapp-widgests">
    <div class="whatsapp-wiges-wrapper justify-center">
        <div class="whatsapp-columns first-year-col">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
        </div>
        
    </div>
</div>				
<?php get_footer(); ?>
