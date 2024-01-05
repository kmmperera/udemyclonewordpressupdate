<?php /* Template Name: Smsalert  Template */ ?>

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
            <h1>SMS ALERT සේවාව සඳහා ලියාපදිංචිය.....
            </h1>
            <p>විශ්ව විද්‍යාලය මගින් ලබාදෙන තොරතුරු දිනපතා ලබාගන්න....


            </p>
            <img src="<?php echo get_template_directory_uri().'/assets/image/smsalert.jpg'?>" alt="">
            <h1>SMS Alert Service යනු කුමක්ද..?

            </h1>
            <p>බාහිර උපාධිය කැලණිය විශ්වවිද්‍යාලය හා අනෙකුත් විශ්වවිද්‍යාලයන්හි බාහිර උපාධිය හදාරනු ලබන බොහෝ සිසුන්හට විශ්වවිද්‍යාලය මගින් නිකුත් කරනු ලබන නිවේදනයන් නොලැබී යාම සම්බන්ධයෙන් බොහෝ සිසුන් අප වෙත පසුගිය කාල වලදී දෙනුම් දෙන ලදි…එම අපහසුතාවය මග හැරීමට හා සිසුන්හට නියමිත වේලාවට විශ්ව විද්‍යාලය තම නිල වෙබ් අඩවියට යාවත්කාලීන කරනු ලබන නිවේදනයන් මෙම සේවාව හරහා ඔබට ඔබගේ දුරකතනයට SMS මාර්ගයෙන් අප විසින් ඔබ විසින් ලබාදීමට කටයුතු කර ඇත..
                <br/><br/>

            එසේම මෙම සේවාව ඔස්සේ අපගේ Online දේශන සඳහා සහබාගීවීමට ආර්ථික අපහසුතා ඇති සිසුන්හට විෂයන් වලට අදාල අනුමාන ප්‍රශ්න,සටහන් ආදී ඉතාමත් වැදගත් Download Link මෙම සේවාව ඔස්සේ ලබාදීමට කටයුතු කර ඇත…
            <br/><br/>


            (සැ.යු; ගාස්තු අය වේ… )




            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
