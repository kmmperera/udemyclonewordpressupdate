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
            <h1>Whatsapp සමූහයන් වෙත පහතින් එකතුවන්න.....
            </h1>
            <p>පහත අප විසින් ලබාදී ඇති Whatsapp සමූහයන් මගින් විශ්වවිද්‍යාලය මගින් ලබාදෙනු ලබන සියලුම නිවේදනයන් මෙන්ම අධ්‍යයන කටයුතු සඳහා අවශ්‍ය වන සටහන්,අනුමාන ප්‍රශ්න හා පිළිතුරු ඇතුලු දේ බෙදා ගත හැකි අතර අනවශ්‍ය වෙළෙඳ දැන්වීම් හා බාහිර උපාධිය සඳහා අදාල නොවන කිසිදි යමක් පළකිරීම ඔබගේ සමාජිකත්වය අහෝසි වීමට හේතු වේ….

            </p>
        </div>
    </div>
</div>
<div class="whatsapp-widgests">
    <div class="whatsapp-wiges-wrapper justify-center">
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


<div class="courses-page-widget-area-div">
        <div class="courses-page-widget-area-wrapper">
            
        
                <?php if( is_active_sidebar('ewt-courses-widget') ):?>
                        
                        <?php dynamic_sidebar('ewt-courses-widget');?>

                <?php endif;?>

        </div>

</div>

<?php get_footer(); ?>





				

