<?php



// Load Stylesheets
function load_css()
{
    $num1 = rand(1, 999);
    $num2 = rand(1, 999);
    $num3 = ($num1 + $num2) / 2;
    wp_register_style('maincss', get_template_directory_uri() . '/inc/css/styles.css', array(), $num3, 'all');
    wp_enqueue_style('maincss');

    wp_register_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', '', '1.0.0', 'all');
    wp_enqueue_style('fontawesome-css');

    wp_register_style('swiperjs-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', '', '1.0.0', 'all');
    wp_enqueue_style('swiperjs-css');


    wp_register_style('ewtgooglefontscss', 'https://fonts.googleapis.com/css2?family=Assistant:wght@500;600;700;800&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap', false);
    wp_enqueue_style('ewtgooglefontscss');

    wp_register_script('mainjs', get_template_directory_uri() . '/inc/js/main.js', array('jquery'), '1.0.20', true);
    wp_enqueue_script('mainjs');

    wp_register_script('swiperjscdn', 'https://unpkg.com/swiper/swiper-bundle.min.js', '1.0.16', true);
    wp_enqueue_script('swiperjscdn');







}
add_action('wp_enqueue_scripts', 'load_css');

function ewt_load_admin_scripts()
{
    wp_enqueue_script('media-upload');
    wp_enqueue_media();

    wp_register_script('ewtadminjs', get_template_directory_uri() . '/inc/js/adminwigdjet.js', array('jquery'), '1.0.13', true);
    wp_enqueue_script('ewtadminjs');

    wp_register_style('widgetadmincss', get_template_directory_uri() . '/inc/css/widgetadmin.css', array(), '1.0.0', 'all');
    wp_enqueue_style('widgetadmincss');



}
add_action('admin_enqueue_scripts', 'ewt_load_admin_scripts');

register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',


    )

);

function my_sidebars()
{
    register_sidebar(

        array(

            'name' => 'Youtube Videos',
            'id' => 'ewt-youtube-widget',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'

        )

    );

    register_sidebar(

        array(

            'name' => 'Facebook Groups',
            'id' => 'ewt-facebook-widget',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'

        )

    );

    register_sidebar(

        array(

            'name' => 'Our Courses',
            'id' => 'ewt-courses-widget',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'

        )

    );

    register_sidebar(

        array(

            'name' => 'Our Team',
            'id' => 'ewt-team-widget',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'

        )

    );

    register_sidebar(

        array(

            'name' => 'Courses Slider One',
            'id' => 'ewt-courses-slider-one-widget',
            'before_title' => '<h3 class="widget-title-test">',
            'after_title' => '</h3>',
            'before_widget' => '<div class="swiper-slide"> <div class="courses-card">',
            'after_widget' => '</div> </div>'

        )

    );

    register_sidebar(

        array(

            'name' => 'Tabs Area',
            'id' => 'ewt-tabs-sidebar-widget',




        )

    );


}

add_action('widgets_init', 'my_sidebars');



// Creating the widget
class ewt_Courses extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
     
    // Base ID of your widget
            'ewt_courses_widget', 
     
    // Widget name will appear in UI
            __('Courses Widget', 'ElegantWUni'), 
     
    // Widget description
            array('description' => __('Courses widget for dispaly available courses', 'ElegantWUni'), )
        );
    }
     
    // Creating widget front-end

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
     
    // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
     
    // This is where you run the code and display the output

        if (!empty($instance['image'])) {
            echo '<img src="' . esc_url($instance['image']) . '" alt="">';
        }

        if (!empty($instance['discription'])) {
            echo '<div class="ewt-courses-discription" >' . $instance['discription'] . '</div>';
        }

        echo $args['after_widget'];
    }
     
    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New course', 'ElegantWUni');
        }
        $image = !empty($instance['image']) ? $instance['image'] : '';

    // Widget admin form
        ?>
    <p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Course Name:'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
    </p>

     <p>
        <label for="<?php echo $this->get_field_id('discription'); ?>"><?php _e('Discription:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('discription'); ?>" name="<?php echo $this->get_field_name('discription'); ?>" type="text" value="<?php echo esc_attr($discription); ?>" />
        </p>


    <p>
	    <label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php esc_attr_e('Image:', 'ElegantWUni'); ?></label> 
		<input class="widefat image-upload" id="<?php echo esc_attr($this->get_field_id('image')); ?>" name="<?php echo esc_attr($this->get_field_name('image')); ?>" type="text" value="<?php echo esc_url($image); ?>">
		<button type="button" class="button button-primary js-image-upload">Select Image</button>
	</p>

    <?php

}
     
    // Updating widget replacing old instances with new
public function update($new_instance, $old_instance)
{
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    $instance['image'] = (!empty($new_instance['image'])) ? $new_instance['image'] : '';
    $instance['discription'] = (!empty($new_instance['discription'])) ? $new_instance['discription'] : '';

    return $instance;
}
     
    // Class wpb_widget ends here
} 
     
    // Register and load the widget
function ewt_load_courses_widget()
{
    register_widget('ewt_Courses');
}
add_action('widgets_init', 'ewt_load_courses_widget');


class ewt_Team extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
         
        // Base ID of your widget
            'ewt_team_widget', 
         
        // Widget name will appear in UI
            __('Team Widget', 'ElegantWUni'), 
         
        // Widget description
            array('description' => __('Team members widget for dispaly our team', 'ElegantWUni'), )
        );
    }
         
        // Creating widget front-end

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
         
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
         
        // This is where you run the code and display the output

        if (!empty($instance['image'])) {
            echo '<img src="' . esc_url($instance['image']) . '" alt="">';
        }

        if (!empty($instance['discription'])) {
            echo '<div class="ewt-team-discription" >' . $instance['discription'] . '</div>';
        }

        echo $args['after_widget'];
    }
         
        // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New member', 'ElegantWUni');
        }
        $image = !empty($instance['image']) ? $instance['image'] : '';
        $discription = !empty($instance['discription']) ? $instance['discription'] : '';

        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Member Name:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('discription'); ?>"><?php _e('Discription:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('discription'); ?>" name="<?php echo $this->get_field_name('discription'); ?>" type="text" value="<?php echo esc_attr($discription); ?>" />
        </p>

    
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php esc_attr_e('Image:', 'ElegantWUni'); ?></label> 
            <input class="widefat image-upload" id="<?php echo esc_attr($this->get_field_id('image')); ?>" name="<?php echo esc_attr($this->get_field_name('image')); ?>" type="text" value="<?php echo esc_url($image); ?>">
            <button type="button" class="button button-primary js-image-upload">Select Image</button>
        </p>
    
        <?php

    }
         
        // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['image'] = (!empty($new_instance['image'])) ? $new_instance['image'] : '';
        $instance['discription'] = (!empty($new_instance['discription'])) ? $new_instance['discription'] : '';

        return $instance;
    }
         
        // Class wpb_widget ends here
} 
         
        // Register and load the widget
function ewt_load_team_widget()
{
    register_widget('ewt_Team');
}
add_action('widgets_init', 'ewt_load_team_widget');



add_theme_support('post-thumbnails');





function ewt_teachers_post_type()
{

    $args = array(


        'labels' => array(

            'name' => 'Teachers',
            'singular_name' => 'Teacher',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),

    );


    register_post_type('teachers', $args);


}
add_action('init', 'ewt_teachers_post_type');


class ewt_Tabs extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
         
        // Base ID of your widget
            'ewt_tabs_widget', 
         
        // Widget name will appear in UI
            __('Tabs Widget', 'ElegantWUni'), 
         
        // Widget description
            array('description' => __('Tabs widget for dispaly course titles in slider', 'ElegantWUni'), )
        );
    }
         
        // Creating widget front-end

    public function widget($args, $instance)
    {
        $subject_title = apply_filters('widget_title', $instance['subject_title']);
        $subject_number = apply_filters('widget_title', $instance['subject_number']);
        if ($subject_number === 'one') {
            $args['before_widget'] = '<div class="tabs-div tab-one active" data-tab="one">';
        } else {
            $classnames = 'tabs-div tab-' . $subject_number . '';
            $datatab = $subject_number;
            $args['before_widget'] = '<div class=" ' . $classnames . '"  data-tab=' . $datatab . '>';
        }
        $args['after_widget'] = '</div>';
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($subject_title))
            echo $subject_title;
       
        // This is where you run the code and display the output



        echo $args['after_widget'];
    }
         
        // Widget Backend
    public function form($instance)
    {
        if (isset($instance['subject_title'])) {
            $subject_title = $instance['subject_title'];
        } else {
            $subject_title = __('Enter new subject', 'ElegantWUni');
        }
        $subject_number = !empty($instance['subject_number']) ? $instance['subject_number'] : '';
    
        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id('subject_title'); ?>"><?php _e('Subject Name:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_title'); ?>" name="<?php echo $this->get_field_name('subject_title'); ?>" type="text" value="<?php echo esc_attr($subject_title); ?>" />
        </p>
    
         <p>
            <label for="<?php echo $this->get_field_id('subject_number'); ?>"><?php _e('Subject Number:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('subject_number'); ?>" name="<?php echo $this->get_field_name('subject_number'); ?>" type="text" value="<?php echo esc_attr($subject_number); ?>" />
         </p>
    
    
       
    
        <?php

    }
         
        // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['subject_title'] = (!empty($new_instance['subject_title'])) ? strip_tags($new_instance['subject_title']) : '';

        $instance['subject_number'] = (!empty($new_instance['subject_number'])) ? $new_instance['subject_number'] : '';

        return $instance;
    }
         
        // Class wpb_widget ends here
} 
         
        // Register and load the widget
function ewt_load_tabs_widget()
{
    register_widget('ewt_Tabs');
}
add_action('widgets_init', 'ewt_load_tabs_widget');

class ewt_Tabs_Slider_Info extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
         
        // Base ID of your widget
            'ewt_tabs_slider_info_widget', 
         
        // Widget name will appear in UI
            __('Tabs Slider Info Widget', 'ElegantWUni'), 
         
        // Widget description
            array('description' => __('Display the information of Tab Slider', 'ElegantWUni'), )
        );
    }
         
        // Creating widget front-end

    public function widget($args, $instance)
    {


        $subject_heading = apply_filters('widget_title', $instance['subject_heading']);
        $subject_number = apply_filters('widget_title', $instance['subject_number']);
        $subject_description = apply_filters('widget_title', $instance['subject_description']);
        $subject_link = apply_filters('widget_title', $instance['subject_link']);

        if ($subject_number === 'one') {
            $args['before_widget'] = ' <div class="courses-tab-details-div courses-tab-details-one active" data-details="one">';
        } else {
            $classnames = 'courses-tab-details-div courses-tab-details-' . $subject_number . '';
            $datadetails = $subject_number;
            $args['before_widget'] = '<div class=" ' . $classnames . '"  data-details=' . $datadetails . '>';
        }
        $args['after_widget'] = '</div>';
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($subject_heading))
            echo '<h2>' . $subject_heading . '</h2>';

        if (!empty($subject_description))
            echo '<p>' . $subject_description . '</p>';

        if (!empty($subject_link))
            echo ' <div class="explore-btn"> <a href=".$subject_link."> Explore More</a></div>';
       
        // This is where you run the code and display the output



        echo $args['after_widget'];
    }
         
        // Widget Backend
    public function form($instance)
    {
        if (isset($instance['subject_heading'])) {
            $subject_heading = $instance['subject_heading'];
        } else {
            $subject_heading = __('Enter the heading', 'ElegantWUni');
        }
        $subject_number = !empty($instance['subject_number']) ? $instance['subject_number'] : '';
        $subject_description = !empty($instance['subject_description']) ? $instance['subject_description'] : '';
        $subject_link = !empty($instance['subject_link']) ? $instance['subject_link'] : '';

       

        // Widget admin form
        ?>

       

        
        <p>
        <label for="<?php echo $this->get_field_id('subject_heading'); ?>"><?php _e('Heading:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_heading'); ?>" name="<?php echo $this->get_field_name('subject_heading'); ?>" type="text" value="<?php echo esc_attr($subject_heading); ?>" />
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('subject_description'); ?>"><?php _e('Description:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_description'); ?>" name="<?php echo $this->get_field_name('subject_description'); ?>" type="text" value="<?php echo esc_attr($subject_description); ?>" />
        </p>

            <p>
        <label for="<?php echo $this->get_field_id('subject_number'); ?>"><?php _e('Subject Number:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_number'); ?>" name="<?php echo $this->get_field_name('subject_number'); ?>" type="text" value="<?php echo esc_attr($subject_number); ?>" />
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('subject_link'); ?>"><?php _e('Link:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_link'); ?>" name="<?php echo $this->get_field_name('subject_link'); ?>" type="text" value="<?php echo esc_attr($subject_link); ?>" />
        </p>

    
        <?php

    }
         
        // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['subject_heading'] = (!empty($new_instance['subject_heading'])) ? strip_tags($new_instance['subject_heading']) : '';
        $instance['subject_description'] = (!empty($new_instance['subject_description'])) ? $new_instance['subject_description'] : '';
        $instance['subject_number'] = (!empty($new_instance['subject_number'])) ? $new_instance['subject_number'] : '';
        $instance['subject_link'] = (!empty($new_instance['subject_link'])) ? $new_instance['subject_link'] : '';


        return $instance;
    }
         
        // Class wpb_widget ends here
} 
         
        // Register and load the widget
function ewt_load_tabs_slider_info_widget()
{
    register_widget('ewt_Tabs_Slider_Info');
}
add_action('widgets_init', 'ewt_load_tabs_slider_info_widget');



class ewt_Tabs_Slider_Videos extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
         
        // Base ID of your widget
            'ewt_tabs_slider_videos_widget', 
         
        // Widget name will appear in UI
            __('Tabs Slider Videos Widget', 'ElegantWUni'), 
         
        // Widget description
            array('description' => __('Display the Videos of Tab Slider', 'ElegantWUni'), )
        );
    }
         
        // Creating widget front-end

    public function widget($args, $instance)
    {



        $subject_number = apply_filters('widget_title', $instance['subject_number']);

        $subject_link_one = apply_filters('widget_title', $instance['subject_link_one']);
        $subject_link_two = apply_filters('widget_title', $instance['subject_link_two']);
        $subject_link_three = apply_filters('widget_title', $instance['subject_link_three']);
        $subject_link_four = apply_filters('widget_title', $instance['subject_link_four']);
        $subject_link_five = apply_filters('widget_title', $instance['subject_link_five']);
        $subject_link_six = apply_filters('widget_title', $instance['subject_link_six']);

        $video_heading_one = apply_filters('widget_title', $instance['video_heading_one']);
        $video_heading_two = apply_filters('widget_title', $instance['video_heading_two']);
        $video_heading_three = apply_filters('widget_title', $instance['video_heading_three']);
        $video_heading_four = apply_filters('widget_title', $instance['video_heading_four']);
        $video_heading_five = apply_filters('widget_title', $instance['video_heading_five']);
        $video_heading_six = apply_filters('widget_title', $instance['video_heading_six']);

        $video_author_one = apply_filters('widget_title', $instance['video_author_one']);
        $video_author_two = apply_filters('widget_title', $instance['video_author_two']);
        $video_author_three = apply_filters('widget_title', $instance['video_author_three']);
        $video_author_four = apply_filters('widget_title', $instance['video_author_four']);
        $video_author_five = apply_filters('widget_title', $instance['video_author_five']);
        $video_author_six = apply_filters('widget_title', $instance['video_author_six']);

        $video_price_one = apply_filters('widget_title', $instance['video_price_one']);
        $video_price_two = apply_filters('widget_title', $instance['video_price_two']);
        $video_price_three = apply_filters('widget_title', $instance['video_price_three']);
        $video_price_four = apply_filters('widget_title', $instance['video_price_four']);
        $video_price_five = apply_filters('widget_title', $instance['video_price_five']);
        $video_price_six = apply_filters('widget_title', $instance['video_price_six']);






        if ($subject_number === 'one') {
            $args['before_widget'] = ' <div class="swiper-container video-container-one active">
                                            <div class="swiper courses-swiper-one">
                                                  <div class="swiper-wrapper">';
        } else {

            $afterw = ' <div class="swiper-container video-container-' . $subject_number . ' ">
                            <div class="swiper courses-swiper-' . $subject_number . ' ">
                                     <div class="swiper-wrapper">';

            $args['before_widget'] = $afterw;
        }
        $args['after_widget'] = '       </div> 
                                    </div> 
                                    <div class="courses-'. $subject_number.'-custom-button-prev arrow-buttons-style prev-arrow">
                                    <i class="fa-solid fa-chevron-left"></i>
                                    </div>
                                    <div class="courses-'. $subject_number.'-custom-button-next arrow-buttons-style next-arrow">
                                    <i class="fa-solid fa-chevron-right"></i>
                                     </div>
                                </div>';
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($subject_link_one) && !empty($video_heading_one) && !empty($video_author_one) && !empty($video_price_one)) {
            echo '<div class="swiper-slide">
                    <div class="courses-card">
                        <iframe src=" ' . $subject_link_one . ' "></iframe>
                        <div class="course-title">
                            <h3> ' . $video_heading_one . '</h3>

                        </div>
                        <div class="course-auther">
                                <p> ' . $video_author_one . ' </p>
                        </div>

                         <div class="course-price">
                                <h4>' . $video_price_one . ' </h4>
                        </div>
                    </div>
                </div> ';
        }

        if (!empty($subject_link_two) && !empty($video_heading_two) && !empty($video_author_two) && !empty($video_price_two)) {
            echo '<div class="swiper-slide">
                    <div class="courses-card">
                        <iframe src=" ' . $subject_link_two . ' "></iframe>
                        <div class="course-title">
                            <h3> ' . $video_heading_two . '</h3>

                        </div>
                        <div class="course-auther">
                                <p> ' . $video_author_two . ' </p>
                        </div>

                         <div class="course-price">
                                <h4>' . $video_price_two . ' </h4>
                        </div>
                    </div>
                </div> ';
        }


        if (!empty($subject_link_three) && !empty($video_heading_three) && !empty($video_author_three) && !empty($video_price_three)) {
            echo '<div class="swiper-slide">
                    <div class="courses-card">
                        <iframe src=" ' . $subject_link_three . ' "></iframe>
                        <div class="course-title">
                            <h3> ' . $video_heading_three . '</h3>

                        </div>
                        <div class="course-auther">
                                <p> ' . $video_author_three . ' </p>
                        </div>

                         <div class="course-price">
                                <h4>' . $video_price_three . ' </h4>
                        </div>
                    </div>
                </div> ';
        }


        if (!empty($subject_link_four) && !empty($video_heading_four) && !empty($video_author_four) && !empty($video_price_four)) {
            echo '<div class="swiper-slide">
                    <div class="courses-card">
                        <iframe src=" ' . $subject_link_four . ' "></iframe>
                        <div class="course-title">
                            <h3> ' . $video_heading_four . '</h3>

                        </div>
                        <div class="course-auther">
                                <p> ' . $video_author_four . ' </p>
                        </div>

                         <div class="course-price">
                                <h4>' . $video_price_four . ' </h4>
                        </div>
                    </div>
                </div> ';
        }


        if (!empty($subject_link_five) && !empty($video_heading_five) && !empty($video_author_five) && !empty($video_price_five)) {
            echo '<div class="swiper-slide">
                    <div class="courses-card">
                        <iframe src=" ' . $subject_link_five . ' "></iframe>
                        <div class="course-title">
                            <h3> ' . $video_heading_five . '</h3>

                        </div>
                        <div class="course-auther">
                                <p> ' . $video_author_five . ' </p>
                        </div>

                         <div class="course-price">
                                <h4>' . $video_price_five . ' </h4>
                        </div>
                    </div>
                </div> ';
        }



        if (!empty($subject_link_six) && !empty($video_heading_six) && !empty($video_author_six) && !empty($video_price_six)) {
            echo '<div class="swiper-slide">
                    <div class="courses-card">
                        <iframe src=" ' . $subject_link_six . ' "></iframe>
                        <div class="course-title">
                            <h3> ' . $video_heading_six . '</h3>

                        </div>
                        <div class="course-auther">
                                <p> ' . $video_author_six . ' </p>
                        </div>

                         <div class="course-price">
                                <h4>' . $video_price_six . ' </h4>
                        </div>
                    </div>
                </div> ';
        }





        echo $args['after_widget'];
    }
         
        // Widget Backend
    public function form($instance)
    {

        $subject_number = !empty($instance['subject_number']) ? $instance['subject_number'] : '';

        $subject_link_one = !empty($instance['subject_link_one']) ? $instance['subject_link_one'] : '';
        $subject_link_two = !empty($instance['subject_link_two']) ? $instance['subject_link_two'] : '';
        $subject_link_three = !empty($instance['subject_link_three']) ? $instance['subject_link_three'] : '';
        $subject_link_four = !empty($instance['subject_link_four']) ? $instance['subject_link_four'] : '';
        $subject_link_five = !empty($instance['subject_link_five']) ? $instance['subject_link_five'] : '';
        $subject_link_six = !empty($instance['subject_link_six']) ? $instance['subject_link_six'] : '';

        $video_heading_one = !empty($instance['video_heading_one']) ? $instance['video_heading_one'] : '';
        $video_heading_two = !empty($instance['video_heading_two']) ? $instance['video_heading_two'] : '';
        $video_heading_three = !empty($instance['video_heading_three']) ? $instance['video_heading_three'] : '';
        $video_heading_four = !empty($instance['video_heading_four']) ? $instance['video_heading_four'] : '';
        $video_heading_five = !empty($instance['video_heading_five']) ? $instance['video_heading_five'] : '';
        $video_heading_six = !empty($instance['video_heading_six']) ? $instance['video_heading_six'] : '';

        $video_author_one = !empty($instance['video_author_one']) ? $instance['video_author_one'] : '';
        $video_author_two = !empty($instance['video_author_two']) ? $instance['video_author_two'] : '';
        $video_author_three = !empty($instance['video_author_three']) ? $instance['video_author_three'] : '';
        $video_author_four = !empty($instance['video_author_four']) ? $instance['video_author_four'] : '';
        $video_author_five = !empty($instance['video_author_five']) ? $instance['video_author_five'] : '';
        $video_author_six = !empty($instance['video_author_six']) ? $instance['video_author_six'] : '';

        $video_price_one = !empty($instance['video_price_one']) ? $instance['video_price_one'] : '';
        $video_price_two = !empty($instance['video_price_two']) ? $instance['video_price_two'] : '';
        $video_price_three = !empty($instance['video_price_three']) ? $instance['video_price_three'] : '';
        $video_price_four = !empty($instance['video_price_four']) ? $instance['video_price_four'] : '';
        $video_price_five = !empty($instance['video_price_five']) ? $instance['video_price_five'] : '';
        $video_price_six = !empty($instance['video_price_six']) ? $instance['video_price_six'] : '';



        

       

        // Widget admin form
        ?>

    <div class="subjectnumdiv">
        <label for="<?php echo $this->get_field_id('subject_number'); ?>"><?php _e('Subject number:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_number'); ?>" name="<?php echo $this->get_field_name('subject_number'); ?>" type="text" value="<?php echo esc_attr($subject_number); ?>" />
    </div>


        <div class="video_form_div"> 
        <p>
        <label for="<?php echo $this->get_field_id('subject_link_one'); ?>"><?php _e('Link:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_link_one'); ?>" name="<?php echo $this->get_field_name('subject_link_one'); ?>" type="text" value="<?php echo esc_attr($subject_link_one); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_heading_one'); ?>"><?php _e('Heading:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_heading_one'); ?>" name="<?php echo $this->get_field_name('video_heading_one'); ?>" type="text" value="<?php echo esc_attr($video_heading_one); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_author_one'); ?>"><?php _e('Author:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_author_one'); ?>" name="<?php echo $this->get_field_name('video_author_one'); ?>" type="text" value="<?php echo esc_attr($video_author_one); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_price_one'); ?>"><?php _e('Price:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_price_one'); ?>" name="<?php echo $this->get_field_name('video_price_one'); ?>" type="text" value="<?php echo esc_attr($video_price_one); ?>" />
        </p>

        </div>

        <div class="video_form_div"> 
        <p>
        <label for="<?php echo $this->get_field_id('subject_link_two'); ?>"><?php _e('Link:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_link_two'); ?>" name="<?php echo $this->get_field_name('subject_link_two'); ?>" type="text" value="<?php echo esc_attr($subject_link_two); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_heading_two'); ?>"><?php _e('Heading:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_heading_two'); ?>" name="<?php echo $this->get_field_name('video_heading_two'); ?>" type="text" value="<?php echo esc_attr($video_heading_two); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_author_two'); ?>"><?php _e('Author:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_author_two'); ?>" name="<?php echo $this->get_field_name('video_author_two'); ?>" type="text" value="<?php echo esc_attr($video_author_two); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_price_two'); ?>"><?php _e('Price:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_price_two'); ?>" name="<?php echo $this->get_field_name('video_price_two'); ?>" type="text" value="<?php echo esc_attr($video_price_two); ?>" />
        </p>

        </div>


        <div class="video_form_div"> 
        <p>
        <label for="<?php echo $this->get_field_id('subject_link_three'); ?>"><?php _e('Link:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_link_three'); ?>" name="<?php echo $this->get_field_name('subject_link_three'); ?>" type="text" value="<?php echo esc_attr($subject_link_three); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_heading_three'); ?>"><?php _e('Heading:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_heading_three'); ?>" name="<?php echo $this->get_field_name('video_heading_three'); ?>" type="text" value="<?php echo esc_attr($video_heading_three); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_author_three'); ?>"><?php _e('Author:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_author_three'); ?>" name="<?php echo $this->get_field_name('video_author_three'); ?>" type="text" value="<?php echo esc_attr($video_author_three); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_price_three'); ?>"><?php _e('Price:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_price_three'); ?>" name="<?php echo $this->get_field_name('video_price_three'); ?>" type="text" value="<?php echo esc_attr($video_price_three); ?>" />
        </p>

        </div>


        <div class="video_form_div"> 
        <p>
        <label for="<?php echo $this->get_field_id('subject_link_four'); ?>"><?php _e('Link:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_link_four'); ?>" name="<?php echo $this->get_field_name('subject_link_four'); ?>" type="text" value="<?php echo esc_attr($subject_link_four); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_heading_four'); ?>"><?php _e('Heading:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_heading_four'); ?>" name="<?php echo $this->get_field_name('video_heading_four'); ?>" type="text" value="<?php echo esc_attr($video_heading_four); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_author_four'); ?>"><?php _e('Author:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_author_four'); ?>" name="<?php echo $this->get_field_name('video_author_four'); ?>" type="text" value="<?php echo esc_attr($video_author_four); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_price_four'); ?>"><?php _e('Price:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_price_four'); ?>" name="<?php echo $this->get_field_name('video_price_four'); ?>" type="text" value="<?php echo esc_attr($video_price_four); ?>" />
        </p>

        </div>


        <div class="video_form_div"> 
        <p>
        <label for="<?php echo $this->get_field_id('subject_link_five'); ?>"><?php _e('Link:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_link_five'); ?>" name="<?php echo $this->get_field_name('subject_link_five'); ?>" type="text" value="<?php echo esc_attr($subject_link_five); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_heading_five'); ?>"><?php _e('Heading:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_heading_five'); ?>" name="<?php echo $this->get_field_name('video_heading_five'); ?>" type="text" value="<?php echo esc_attr($video_heading_five); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_author_five'); ?>"><?php _e('Author:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_author_five'); ?>" name="<?php echo $this->get_field_name('video_author_five'); ?>" type="text" value="<?php echo esc_attr($video_author_five); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_price_five'); ?>"><?php _e('Price:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_price_five'); ?>" name="<?php echo $this->get_field_name('video_price_five'); ?>" type="text" value="<?php echo esc_attr($video_price_five); ?>" />
        </p>

        </div>



        <div class="video_form_div"> 
        <p>
        <label for="<?php echo $this->get_field_id('subject_link_six'); ?>"><?php _e('Link:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('subject_link_six'); ?>" name="<?php echo $this->get_field_name('subject_link_six'); ?>" type="text" value="<?php echo esc_attr($subject_link_six); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_heading_six'); ?>"><?php _e('Heading:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_heading_six'); ?>" name="<?php echo $this->get_field_name('video_heading_six'); ?>" type="text" value="<?php echo esc_attr($video_heading_six); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_author_six'); ?>"><?php _e('Author:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_author_six'); ?>" name="<?php echo $this->get_field_name('video_author_six'); ?>" type="text" value="<?php echo esc_attr($video_author_six); ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('video_price_six'); ?>"><?php _e('Price:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('video_price_six'); ?>" name="<?php echo $this->get_field_name('video_price_six'); ?>" type="text" value="<?php echo esc_attr($video_price_six); ?>" />
        </p>

        </div>


      

        
    
        <?php

    }
         
        // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['subject_number'] = (!empty($new_instance['subject_number'])) ? strip_tags($new_instance['subject_number']) : '';

        $instance['subject_link_one'] = (!empty($new_instance['subject_link_one'])) ? strip_tags($new_instance['subject_link_one']) : '';
        $instance['subject_link_two'] = (!empty($new_instance['subject_link_two'])) ? strip_tags($new_instance['subject_link_two']) : '';
        $instance['subject_link_three'] = (!empty($new_instance['subject_link_three'])) ? strip_tags($new_instance['subject_link_three']) : '';
        $instance['subject_link_four'] = (!empty($new_instance['subject_link_four'])) ? strip_tags($new_instance['subject_link_four']) : '';
        $instance['subject_link_five'] = (!empty($new_instance['subject_link_five'])) ? strip_tags($new_instance['subject_link_five']) : '';
        $instance['subject_link_six'] = (!empty($new_instance['subject_link_six'])) ? strip_tags($new_instance['subject_link_six']) : '';

        $instance['video_heading_one'] = (!empty($new_instance['video_heading_one'])) ? strip_tags($new_instance['video_heading_one']) : '';
        $instance['video_heading_two'] = (!empty($new_instance['video_heading_two'])) ? strip_tags($new_instance['video_heading_two']) : '';
        $instance['video_heading_three'] = (!empty($new_instance['video_heading_three'])) ? strip_tags($new_instance['video_heading_three']) : '';
        $instance['video_heading_four'] = (!empty($new_instance['video_heading_four'])) ? strip_tags($new_instance['video_heading_four']) : '';
        $instance['video_heading_five'] = (!empty($new_instance['video_heading_five'])) ? strip_tags($new_instance['video_heading_five']) : '';
        $instance['video_heading_six'] = (!empty($new_instance['video_heading_six'])) ? strip_tags($new_instance['video_heading_six']) : '';

        $instance['video_author_one'] = (!empty($new_instance['video_author_one'])) ? strip_tags($new_instance['video_author_one']) : '';
        $instance['video_author_two'] = (!empty($new_instance['video_author_two'])) ? strip_tags($new_instance['video_author_two']) : '';
        $instance['video_author_three'] = (!empty($new_instance['video_author_three'])) ? strip_tags($new_instance['video_author_three']) : '';
        $instance['video_author_four'] = (!empty($new_instance['video_author_four'])) ? strip_tags($new_instance['video_author_four']) : '';
        $instance['video_author_five'] = (!empty($new_instance['video_author_five'])) ? strip_tags($new_instance['video_author_five']) : '';
        $instance['video_author_six'] = (!empty($new_instance['video_author_six'])) ? strip_tags($new_instance['video_author_six']) : '';

        $instance['video_price_one'] = (!empty($new_instance['video_price_one'])) ? strip_tags($new_instance['video_price_one']) : '';
        $instance['video_price_two'] = (!empty($new_instance['video_price_two'])) ? strip_tags($new_instance['video_price_two']) : '';
        $instance['video_price_three'] = (!empty($new_instance['video_price_three'])) ? strip_tags($new_instance['video_price_three']) : '';
        $instance['video_price_four'] = (!empty($new_instance['video_price_four'])) ? strip_tags($new_instance['video_price_four']) : '';
        $instance['video_price_five'] = (!empty($new_instance['video_price_five'])) ? strip_tags($new_instance['video_price_five']) : '';
        $instance['video_price_six'] = (!empty($new_instance['video_price_six'])) ? strip_tags($new_instance['video_price_six']) : '';








        return $instance;
    }
         
        // Class wpb_widget ends here
} 
         
        // Register and load the widget
function ewt_load_tabs_slider_videos_widget()
{
    register_widget('ewt_Tabs_Slider_Videos');
}
add_action('widgets_init', 'ewt_load_tabs_slider_videos_widget');


