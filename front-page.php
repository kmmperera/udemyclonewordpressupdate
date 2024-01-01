<?php get_header(); ?>
    
<div class="main">
        <div class="hero-section">
            <div class="hero-wrapper">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/image/hero-one.jpg' ?>"   alt="">
                            </div>
                            <div class="hero-text">
                                <h1>Join us Now

                                </h1>
                                <p>
                                    Learn skills from real-world experts from
                                    <br/> around the globe. Get courses from €12.99
                                    <br/>through Dec 21.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/image/hero-two.jpg' ?>"     alt="">
                            </div>
                            <div class="hero-text">
                                <h1>Flash Sale on now

                                </h1>
                                <p>
                                    Skill up with courses from €14.99 and save an
                                    <br/> extra 15% on discounted courses with code
                                    <br/> 15BONUS. Ends tomorrow.


                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hero-image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/image/hero-three.jpg' ?>"   alt="">
                            </div>
                            <div class="hero-text">
                                <h1>
                                    Check out new courses
                                </h1>
                                <p>
                                    Learn skills from real-world experts from
                                    <br/> around the globe. Get courses from €12.99
                                    <br/>through Dec 21.
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

                    <button class="search-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <input type="text" placeholder="Search for anything">
                </div>
            </div>



        </div>

        <div class="badges-section">
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
        <div class="courses-section">
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
        <div class="reviews-section">
            <div class="reviews-wrapper">
                <div class="reviews-text">
                    <h2>How learners like you are achieving their goals
                    </h2>
                </div>

                <div class="swiper-container">
                    <div class="reviews-slider swiper swiper-reviews">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card reviews-slider-slideone">
                                    <div class="reviews-slide-part-one">
                                        <i class="fa-solid fa-quote-left"></i>
                                        <p>
                                            I am proud to say that after a few months of taking this course...
                                            <b>I passed my exam and am now an AWS Certified Cloud Practitioner!</b>
                                            This content was exactly what the CCP exam covered.

                                        </p>
                                    </div>
                                    <div class="reviews-slide-part-two">
                                        <p>
                                            <span class="name-avatar">
                                                WA
                                            </span>
                                            <span class="rivewer-name">Will A</span>
                                        </p>
                                    </div>

                                    <div class="reviews-slide-part-three">

                                        <span class="play-icon">
                                            <i class="fa-solid fa-play"></i>
                                        </span>
                                        <span class="part-three-texts">Title of the faculty</span>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card reviews-slider-slidetwo">
                                    <div class="reviews-slide-part-one">
                                        <i class="fa-solid fa-quote-left"></i>
                                        <p>
                                            I am proud to say that after a few months of taking this course...
                                            <b>I passed my exam and am now an AWS Certified Cloud Practitioner!</b>
                                            This content was exactly what the CCP exam covered.

                                        </p>
                                    </div>
                                    <div class="reviews-slide-part-two">
                                        <p>
                                            <span class="name-avatar">
                                                WA
                                            </span>
                                            <span class="rivewer-name">Will A</span>
                                        </p>
                                    </div>

                                    <div class="reviews-slide-part-three">

                                        <span class="play-icon">
                                            <i class="fa-solid fa-play"></i>
                                        </span>
                                        <span class="part-three-texts">Title of the faculty</span>

                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card reviews-slider-slidethree">
                                    <div class="reviews-slide-part-one">
                                        <i class="fa-solid fa-quote-left"></i>
                                        <p>
                                            I am proud to say that after a few months of taking this course...
                                            <b>I passed my exam and am now an AWS Certified Cloud Practitioner!</b>
                                            This content was exactly what the CCP exam covered.

                                        </p>
                                    </div>
                                    <div class="reviews-slide-part-two">
                                        <p>
                                            <span class="name-avatar">
                                                WA
                                            </span>
                                            <span class="rivewer-name">Will A</span>
                                        </p>
                                    </div>

                                    <div class="reviews-slide-part-three">

                                        <span class="play-icon">
                                            <i class="fa-solid fa-play"></i>
                                        </span>
                                        <span class="part-three-texts">Title of the faculty</span>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card reviews-slider-slidefour">
                                    <div class="reviews-slide-part-one">
                                        <i class="fa-solid fa-quote-left"></i>
                                        <p>
                                            I am proud to say that after a few months of taking this course...
                                            <b>I passed my exam and am now an AWS Certified Cloud Practitioner!</b>
                                            This content was exactly what the CCP exam covered.

                                        </p>
                                    </div>
                                    <div class="reviews-slide-part-two">
                                        <p>
                                            <span class="name-avatar">
                                                WA
                                            </span>
                                            <span class="rivewer-name">Will A</span>
                                        </p>
                                    </div>

                                    <div class="reviews-slide-part-three">

                                        <span class="play-icon">
                                            <i class="fa-solid fa-play"></i>
                                        </span>
                                        <span class="part-three-texts">Title of the faculty</span>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card reviews-slider-slidefive">
                                    <div class="reviews-slide-part-one">
                                        <i class="fa-solid fa-quote-left"></i>
                                        <p>
                                            I am proud to say that after a few months of taking this course...
                                            <b>I passed my exam and am now an AWS Certified Cloud Practitioner!</b>
                                            This content was exactly what the CCP exam covered.

                                        </p>
                                    </div>
                                    <div class="reviews-slide-part-two">
                                        <p>
                                            <span class="name-avatar">
                                                WA
                                            </span>
                                            <span class="rivewer-name">Will A</span>
                                        </p>
                                    </div>

                                    <div class="reviews-slide-part-three">

                                        <span class="play-icon">
                                            <i class="fa-solid fa-play"></i>
                                        </span>
                                        <span class="part-three-texts">Title of the faculty</span>

                                    </div>
                                </div>
                            </div>

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
        <div class="videos-slider-section">
            <div class="videos-slider-wrapper">
                <div class="video-slider-text">
                    <h2>Learners are viewing
                    </h2>
                </div>

                <div class="swiper-container">
                    <div class="swiper swiper-videos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-cards">
                                    <iframe src="https://www.youtube.com/embed/Tfn3cCcE5hQ"></iframe>
                                    <div class="course-title">
                                        <h3> සිංහල නව විෂය නිර්දේශය හදුන්වා දීම</h3>

                                    </div>
                                    <div class="course-auther">
                                        <p> Chathurika Dabare </p>
                                    </div>

                                    <div class="course-price">
                                        <h4>1000 Rs per 2 hours </h4>
                                    </div>
                                </div>
                            </div>
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
        <div class="facebook-group-section">
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
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>

                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>
                        <a class="fb-group-link" href="">
                            <i class="fa-brands fa-facebook-f"></i>
                            <h4 class="fb-link-a-text">
                                බස්නාහිර පලාතේ බාහිර උපාදිය කරන අපි
                            </h4>
                            <h4> සම්බන්ධවීමට Click කරන්න </h4>
                        </a>




                    </div>
                </div>
            </div>
        </div>
        <div class="category-link-section">
            <div class="category-link-wrapper">
                <div class="category-section-text">
                    <h2>Featured topics by category </h2>

                </div>
                <div class="category-section-columns">
                    <div class="cat-cols">

                        <h3>Development
                        </h3>
                        <p>
                            <a href="">Python</a>
                            <span>12,354,111 learners
                            </span>
                        </p>
                        <p>
                            <a href="">Web Development</a>
                            <span>11,675,234 learners
                            </span>
                        </p>
                        <p>
                            <a href="">Machine Learning</a>
                            <span>10,453,123 learners
                            </span>
                        </p>
                    </div>
                    <div class="cat-cols">

                        <h3>Business
                        </h3>
                        <p>
                            <a href="">Financial Analysis</a>
                            <span>34,567,123 learners
                            </span>
                        </p>
                        <p>
                            <a href="">SQL</a>
                            <span>23,789,12 learners
                            </span>
                        </p>
                        <p>
                            <a href="">PMP</a>
                            <span>36,354,994 learners
                            </span>
                        </p>
                    </div>
                    <div class="cat-cols">

                        <h3>IT and Software
                        </h3>
                        <p>
                            <a href="">Amazon AWS</a>
                            <span>56,123,567 learners
                            </span>
                        </p>
                        <p>
                            <a href="">Ethical Hacking</a>
                            <span>89,123,111 learners
                            </span>
                        </p>
                        <p>
                            <a href="">Cyber Security</a>
                            <span>36,354,994 learners
                            </span>
                        </p>
                    </div>
                    <div class="cat-cols">

                        <h3>Design
                        </h3>
                        <p>
                            <a href="">Photoshop</a>
                            <span>36,354,994 learners
                            </span>
                        </p>
                        <p>
                            <a href="">Graphic Design</a>
                            <span>56,234,000 learners
                            </span>
                        </p>
                        <p>
                            <a href="">Drawing</a>
                            <span>11,555,111 learners
                            </span>
                        </p>
                    </div>

                </div>
                <div class="explore-more-btn explore-btn">
                    Explore more topics
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
                            Unlimited access to 25,000+ top Udemy courses, anytime, anywhere

                        </li>
                        <li>
                            <i class="fa-solid fa-circle"></i>
                            International course collection in 14 languages

                        </li>
                        <li>
                            <i class="fa-solid fa-circle"></i>
                            Top certifications in tech and business

                        </li>
                    </ul>
                    <div class="more-info-buttons">
                        <div class="more-info-left-btn dark-btn">
                            Enroll Now
                        </div>
                        <div class="more-info-right-btn explore-btn">
                            Learn More
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
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/image/ayomi.jpg' ?>" alt="">
                                    </div>
                                    <div class="team-member-name">
                                        Ayomi
                                        <br/> Jayasinghe
                                    </div>
                                    <div class="team-member-description">
                                        Psycology
                                    </div>
                                    <div class="team-member-price">
                                        Rs.1000 per 2 hours
                                    </div>
                                    <div class="more-info-instructor">
                                        More info
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/image/ayomi.jpg' ?>" alt="">
                                    </div>
                                    <div class="team-member-name">
                                        Ayomi
                                        <br/> Jayasinghe
                                    </div>
                                    <div class="team-member-description">
                                        Psycology
                                    </div>
                                    <div class="team-member-price">
                                        Rs.1000 per 2 hours
                                    </div>
                                    <div class="more-info-instructor">
                                        More info
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/image/ayomi.jpg' ?>" alt="">
                                    </div>
                                    <div class="team-member-name">
                                        Ayomi
                                        <br/> Jayasinghe
                                    </div>
                                    <div class="team-member-description">
                                        Psycology
                                    </div>
                                    <div class="team-member-price">
                                        Rs.1000 per 2 hours
                                    </div>
                                    <div class="more-info-instructor">
                                        More info
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/image/ayomi.jpg' ?>" alt="">
                                    </div>
                                    <div class="team-member-name">
                                        Ayomi
                                        <br/> Jayasinghe
                                    </div>
                                    <div class="team-member-description">
                                        Psycology
                                    </div>
                                    <div class="team-member-price">
                                        Rs.1000 per 2 hours
                                    </div>
                                    <div class="more-info-instructor">
                                        More info
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/image/ayomi.jpg' ?>" alt="">
                                    </div>
                                    <div class="team-member-name">
                                        Ayomi
                                        <br/> Jayasinghe
                                    </div>
                                    <div class="team-member-description">
                                        Psycology
                                    </div>
                                    <div class="team-member-price">
                                        Rs.1000 per 2 hours
                                    </div>
                                    <div class="more-info-instructor">
                                        More info
                                    </div>
                                </div>
                            </div>


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
                        Instructors from around the world teach millions of learners on Udemy. We provide the tools and skills to teach what you
                        love.

                    </p>
                    <div class="start-teaching-btn dark-btn">
                        Start teaching today
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php get_footer(); ?>