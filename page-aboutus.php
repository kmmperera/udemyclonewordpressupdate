<?php /* Template Name: Aboutus  Template */ ?>

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

<div class="about-us-description">
    <div class="about-us-description-wrapper">
        
    <div class="description-text-wrapper bottom-line">

            <h1>
            අප ගැන...

            </h1>
            <p>
            බාහිර උපාධිය සඳහා ඔබ විසින් ආචාර්යවරුන් තෝරා ගැනීමේදී ඔබ විසින් අනිවාරයෙන්ම සැලකිළිමත් වියයුතු කරුණු කීපයක් ඇත….විශ්වවිද්‍යාලය මගින් පවත්වනු ලබන බාහිර උපාධිය සඳහා ලකුණු ලබාදීමේ පටිපාටිය හා ලකුණු ලබාදෙන කරුණු පිළිබඳව මනා අවබෝධයක් ඔබගේ ආචාර්‍යවරයාට තිබිය යුතුය…එසේ නොමැතිනම් ඔබහට නිවැරදිව පිළිතුරක් ලකුණු ලබාගැනීමට ගොඩ නගන ආකාරය නිවැරදිව ඔබහට අවබෝධ කරවීමට ඔහුට හැකියාවක් ලැබෙන්නේ නැත.
            <br/> <br/>

            එසේම විශ්වවිද්‍යාලයේ අධ්‍යයන අංශයන්හි ඉහල ප්‍රතිඵල ලබාගත් අය පමණක් එම අදාල අධ්‍යයන අංශයේ Assistant Lecture තනතුර සඳහා බදවා ගනු ලබයි..ඉගැන්වීමේ පළපුරුද්ද හා විශ්වවිද්‍යාල දේශන පැවැත්වීමෙහි මනා පළපුරුද්දක් මෙහිදී ලබාදීම සිදුවේ…
            <br/> <br/>

            බාහිර උපාධිය කැලණිය විශ්වවිද්‍යාලය සඳහා මෙම දේශන මාලාව පවත්වනු ලබනුයේ කැලණිය විශ්වවිද්‍යාලය බාහිර උපාධි පිළිතුරු පත්‍ර අධීක්ෂණ අද්දැකීම් සහිත ඉතාමත් පළපුරුදු ආචාර්‍යවරු සමූහයක් විසිනි…….



            </p>
     </div>
    </div>
</div>

<div class="about-us-ceo">
    <div class="about-us-ceo-wrapper bottom-line">
        <div class="ceo-first-row ceo-row justify-center">
            <div class="ceo-left">
                <img src="<?php echo get_template_directory_uri().'/assets/image/ceo.jpg'?>" alt="">
            </div>
            <div class="ceo-right">
                <h1>
                CEO Hoyamu Lanka pvt Ltd

                </h1>
                <h4>
                AMDNC Abeykoon

                </h4>
                <p>
                Bachelor of Arts (Hons) in Computer Studies – University of Kelaniya,Sri Lanka..
                CEO at <a href="">Hoyamu lanka pvt ltd</a>,Super Administrator at <a href="">UOK අපි</a>,Web Content Writer at <a href="">It වැඩ්ඩෝ</a>


                </p>
            </div>
        </div>
        <div class="ceo-second-row ceo-row justify-center">
            <div class="ceo-left">
                <img src="<?php echo get_template_directory_uri().'/assets/image/cordinator.jpg'?>" alt="">
            </div>
            <div class="ceo-right">
                <h1>Academic Coordinator</h1>
                <h4>Sanjeewa Gunarathna</h4>
                <p>
                BA Drama Sp.(Hons)/MA University Of Kelaniya,

                </p>
            </div>
        </div>
    </div>

</div>
<div class="about-us-teachers-widget">
    <div class="about-us-teachers-wrapper justify-center">
                        <?php if (is_active_sidebar('ewt-courses-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-courses-widget'); ?>

                        <?php endif; ?>
    </div>
</div>
<div class="see-all-members">
                    <a class="see-all-a" href="<?php echo home_url();?>/category/teachers">Check All Lecturers</a>
</div>

<div class="about-us-why-us">
    <div class="about-us-why-us-wrapper">
        
    </div>
</div>
<div class="about-us-reviews">
    <div  class="about-us-reviews-wrapper">

    </div>
</div>
<div class="about-us-short">
    <div class="about-us-short-wrapper">

    </div>
</div>
<div class="link-to-sms-us">
    <div class="link-to-sms-wrapper justify-center">
        <div class="sms-left">
            <h3>Want to Receive Fresh News?</h3>
        </div>
        <div class="sms-middle">
            <p>ඔබට විශ්වවිද්‍යාලය මගින් විශ්වවිද්‍යාල නිල වෙබ් අඩවියට යාවත්කාලීන කරනු ලබන නිවේදන දැන් එසැනින් දැන් ඔබට දුරකතනයට SMS මාර්ගයෙන් ගෙන්වා ගන්න....
            </p>
        </div>
        <div class="sms-right">
            <a href="<?php echo home_url();?>/sms-alert">SUBSCRIBE</a>
        </div>
    </div>
</div>
				
<?php get_footer(); ?>
