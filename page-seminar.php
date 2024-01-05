<?php /* Template Name: Seminar  Template */ ?>

<?php get_header(); ?>
<div class="menu-wrapper">
   <div class="ewt-wrapper">
        <div class="hero-area">
        
            <nav class="ewt-nav">
                <div class="ewt-nav-wrapper">
                    <div class="ewt-logo">
                      
                    </div>
                
               </div>
            </nav>


        </div>
    </div>
 </div>

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
            <h1>සෙමිනා හදහා සහභාගී වීමට පහත whatsapp සමූහයන් වෙත එකතුවන්න.....
            </h1>
            <p>පහත අප විසින් ලබාදී ඇති whatsapp සමූහයන් මගින් අප පවත්වන ලබන සියලුම සෙමිනා  සඳහා සහභාගී විය හැකිය

            </p>
        </div>
    </div>
</div>
<div class="whatsapp-widgests semina-widget">
    <div class="whatsapp-wiges-wrapper justify-center semina-widget-wrapper">

                <?php if (is_active_sidebar('ewt-semina-buttons-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-semina-buttons-sidebar-widget'); ?>

                <?php endif; ?>
    </div>
</div>				
<?php get_footer(); ?>
