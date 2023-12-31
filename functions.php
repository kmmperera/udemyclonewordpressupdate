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

    wp_register_script('mainjs', get_template_directory_uri() . '/inc/js/main.js', array('jquery'), '1.0.16', true);
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


