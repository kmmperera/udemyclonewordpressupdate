<?php get_header(); ?>
    
<div class="main">
        <div id="top-sections-id" class="hero-section">
            <div class="hero-wrapper">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/image/hero-one.png' ?>"   alt="">
                            </div>
                            <div class="hero-text">
                                <h1> ආයුබෝවන්

                                </h1>
                                <p>
                                අපේ වෙබ් අඩවියට ඔබ සාදරයෙන් පිලිගනිමු
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/image/hero-two.png' ?>"     alt="">
                            </div>
                            <div class="hero-text">
                                <h1>පොත්...

                                </h1>
                                <p>
                                බාහිර උපාදිය සදහා සටහන් ලබා ගැනීමට


                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/image/hero-three.png' ?>"   alt="">
                            </div>
                            <div class="hero-text">
                                <h1>
                                    Whatapp
                                </h1>
                                <p>
                                අපගේ Whatapp සමූහයන් හා එක් වන්න 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-arrows">
                    <div class="hero-custom-button-prev ">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="hero-custom-button-next ">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>

                </div>
                <div class="header-search other-search">

                    <?php get_search_form(); ?>
                </div>
            </div>



        </div>

        <div id="other-commiunities" class="badges-section">
            <div class="badger-wrapper">
                <div class="badgers-text grey-letters">
                    Our commiunities

                </div>
                <div class="badgers-images">
                    <div class="badger-one">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/row-one.png' ?>" alt="">
                    </div>
                    <div class="badger-one">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/row-two.png' ?>" alt="">
                    </div>

                    <div class="badger-one">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/row-three.png' ?>" alt="">
                    </div>

                    <div class="badger-one">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/row-four.png' ?>" alt="">
                    </div>

                    <div class="badger-one">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/row-five.png' ?>" alt="">
                    </div>

                    <div class="badger-one">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/row-six.jpg' ?>" alt="">
                    </div>


                </div>
            </div>
        </div>
        <div id="youtube-playlist" class="courses-section">
            <div class="courses-wrapper">
                <div class="courses-text">
                    <h2>A broad selection of courses</h2>
                    <p>
                        Choose from over 210,000 online video courses with new additions published every month
                    </p>

                </div>
                <?php if (is_active_sidebar('ewt-tabs-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-tabs-sidebar-widget'); ?>

                <?php endif; ?>
            </div>
        </div>
        <div id="our-reviews" class="reviews-section">
            <div class="reviews-wrapper">
                <div class="reviews-text">
                    <h2>How learners like you are achieving their goals
                    </h2>
                </div>

                <div class="swiper-container">
                    <div class="reviews-slider swiper swiper-reviews">
                        <div class="swiper-wrapper">
                           
                        <?php if (is_active_sidebar('ewt-reviews-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-reviews-sidebar-widget'); ?>

                        <?php endif; ?>


                        </div>





                    </div>
                    <div class="reviews-custom-button-prev arrow-buttons-style">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="reviews-custom-button-next arrow-buttons-style">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>

                </div>
            </div>
        </div>
        <div id="new-videos" class="videos-slider-section">
            <div class="videos-slider-wrapper">
                <div class="video-slider-text">
                    <h2>Learners are viewing
                    </h2>
                </div>

                <div class="swiper-container">
                    <div class="swiper swiper-videos">
                        <div class="swiper-wrapper">
                        <?php if (is_active_sidebar('ewt-more-videos-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-more-videos-sidebar-widget'); ?>

                        <?php endif; ?>

                        </div>





                    </div>
                    <div class="videos-custom-button-prev arrow-buttons-style">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="videos-custom-button-next arrow-buttons-style">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="our-fb-section-id" class="facebook-group-section">
            <div class="facebook-group-wrapper">
                <div class="fb-group-text">
                    <h2> Join our facebook groups </h2>
                    <h4>
                        සියලුම විශ්වවිද්‍යාල වල බාහිර උපාදිය හදාරන ඔබ සැමට දිස්ත්‍රික් වශයෙන් තම දැනුම බෙදාගැනීම හා නිවේදනයන් සටහන් අනුමාන ප්‍රශ්න
                        බෙදා හදාගැනීම අපේ අරමුනයි
                    </h4>
                </div>
                <div class="fb-group-images">
                    <div class="fb-img-div">
                    <?php if (is_active_sidebar('ewt-front-page-fb-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-front-page-fb-sidebar-widget'); ?>

                    <?php endif; ?>



                    </div>
                </div>
            </div>
        </div>
        <div class="category-link-section">
            <div class="category-link-wrapper">
                <div class="category-section-text">
                    <h2>Some useful links </h2>

                </div>
                <div class="category-section-columns">
                    <div class="cat-cols">

                        <h3>Seminars
                        </h3>
                        <p>
                            <a href="./seminar-series">First Year</a>
                            <span> seminars for first year
                            </span>
                        </p>
                        <p>
                            <a href="./seminar-series">Second Year</a>
                            <span>seminars for second year
                            </span>
                        </p>
                        <p>
                            <a href="./seminar-series">Third Year</a>
                            <span>seminars for third year
                            </span>
                        </p>
                    </div>
                    <div class="cat-cols">

                        <h3>Time tables
                        </h3>
                        <p>
                            <a href="./time-tables">First Year</a>
                            <span>Time tables for first year
                            </span>
                        </p>
                        <p>
                            <a href="./time-tables">Second Year</a>
                            <span>Time tables for second year
                            </span>
                        </p>
                        <p>
                            <a href="./time-tables">Third Year</a>
                            <span>Time tables for third year
                            </span>
                        </p>
                    </div>
                    <div class="cat-cols">

                        <h3>Whatsapp Groups
                        </h3>
                        <p>
                            <a href="./join-our-whatsapp">First Year</a>
                            <span>Whatsapp group for first year
                            </span>
                        </p>
                        <p>
                            <a href="./join-our-whatsapp">Second Year</a>
                            <span>Whatsapp group for second year
                            </span>
                        </p>
                        <p>
                            <a href="./join-our-whatsapp">Third Year</a>
                            <span>Whatsapp group for third year
                            </span>
                        </p>
                    </div>
                    <div class="cat-cols">

                        <h3>Our courses
                        </h3>
                        <p>
                            <a href="./our-courses">Sociology</a>
                            <span>සමාජ විද්‍යාව 
                            </span>
                        </p>
                        <p>
                            <a href="./our-courses">Archaeology</a>
                            <span>පුරාවිද්‍යාව
                            </span>
                        </p>
                        <p>
                            <a href="./our-courses">Geography</a>
                            <span>භූගෝල විද්‍යාව
                            </span>
                        </p>
                    </div>

                </div>
                <div class="explore-more-btn explore-btn">
                   <a href="./about-us"> Explore more about us </a>
                </div>
            </div>
        </div>
        <div class="more-info-section">
            <div class="more-info-wrapper">
                <div class="more-info-left">
                    <div class="more-info-logo">
                        <img src="<?php echo get_template_directory_uri() . '/assets/image/logo.png' ?>" alt="">
                    </div>
                    <h1>
                        Upskill your team with Us

                    </h1>
                    <ul>
                        <li>
                            <i class="fa-solid fa-circle"></i>
                            Unlimited access to 30 lecture programmes,all online!

                        </li>
                        <li>
                            <i class="fa-solid fa-circle"></i>
                           More than  2800 students island wide

                        </li>
                        <li>
                            <i class="fa-solid fa-circle"></i>
                            11 qualified lectures

                        </li>
                    </ul>
                    <div class="more-info-buttons">
                        <div class="more-info-left-btn dark-btn">
                          <a class="div-to-a" href="./enroll-now">  Enroll Now </a>
                        </div>
                        <div class="more-info-right-btn explore-btn">
                        <a class="div-to-a" href="./about-us">   Learn More </a>
                        </div>
                    </div>

                </div>
                <div class="more-info-right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/image/more-info.jpg' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="team-section">
            <div class="team-wrapper">
                <div class="swiper-container">


                    <div class="swiper our-team-swiper">
                        <div class="swiper-wrapper">
                          
                        <?php if (is_active_sidebar('ewt-our-team-sidebar-widget')) : ?>
                        
                        <?php dynamic_sidebar('ewt-our-team-sidebar-widget'); ?>

                        <?php endif; ?>


                        </div>


                    </div>


                    <div class="team-custom-button-prev arrow-buttons-style">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="team-custom-button-next arrow-buttons-style">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>



                </div>
            </div>
        </div>

        <div class="join-us-section">
            <div class="join-us-wrapper">
                <div class="join-us-left">
                    <img src="<?php echo get_template_directory_uri() . '/assets/image/join-us.jpg' ?>" alt="">
                </div>
                <div class="join-us-right">
                    <h1>
                        Become an instructor

                    </h1>
                    <p>
                        Instructors from around the island teach tons of content on Gaqkelaniya. We provide the tools and skills to teach what you
                        love.

                    </p>
                    <div class="start-teaching-btn dark-btn">
                      <a href="./join-our-team">  Start teaching today </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php get_footer(); ?>