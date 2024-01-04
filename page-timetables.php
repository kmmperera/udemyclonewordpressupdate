<?php /* Template Name: Timetables  Template */ ?>

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
            <h1>කාල සටහන් ලබා ගැනිම සදහා පහත ලින්ක් මත ක්ලික් කරන්න .....
            </h1>
            <p>අප විසින් යාවත්කාලීන කරන කාල සටහන් මෙම පිටුවෙ ලැයිස්තුගත කර ඇත

            </p>
        </div>
    </div>
</div>
<div class="whatsapp-widgests time-tables-widget">
    <div class="whatsapp-wiges-wrapper justify-center time-tables-widget-wrapper">
        <div class="whatsapp-columns first-year-col">
            <a href="">ප්‍රතම වසර</a>
        </div>
        <div class="whatsapp-columns second-year-col">
            <a href="">දෙවන වසර</a>
        </div> <div class="whatsapp-columns third-year-col">
            <a href="">තෙවන වසර</a>
        </div>
        
    </div>
</div>				
<?php get_footer(); ?>
