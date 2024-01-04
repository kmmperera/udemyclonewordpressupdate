<?php

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="search-lable">
        <span class="screen-reader-text"><?php _x( 'Search for:', 'label', 'ElegantWUni'); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for anything', 'placeholder', 'ElegantWUni' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'ElegantWUni' ); ?>" />
</form>