<?php
/**
 * Custom Archive Widget to display Year and Months 
 */

add_action('widgets_init', 'futurebridge_Archives_init');
function futurebridge_Archives_init() {
    register_widget('futurebridge_Archives');
}

class futurebridge_Archives extends WP_Widget
{

    function __construct() {
        $widget_ops = array('description' => __('Archives Yearly-Monthly', 'default'));
        parent::__construct(
            'futurebridge_Archives',
            __('Archives Yearly-Monthly', 'default'),
            $widget_ops
        );
    }

    function widget( $args, $instance ) {
		extract( (array)$args );
	    global $wpdb;
	    $before_widget = $before_title = $after_title = $after_widget = null;
		//Our variables from the widget settings
	    if(is_array($instance) && isset($instance['title'])){
			$title = apply_filters('widget_title', $instance['title'] );
	    } else {
	 		$title = " ";
	 	}

        if(is_array($instance) && isset($instance['post_type'])){
			$post_type = apply_filters('widget_post_type', $instance['post_type'] );
	    } else {
	 		$post_type = "post";
	 	}
        
        $selected_year = get_query_var('year');
        $selected_month = get_query_var('monthnum');
        
		// include style sheet & script file to plugin
		wp_enqueue_script('archive-scripts',get_template_directory_uri().'/assets/js/futurebridge_archives.js', array('jquery'), false ,true);

		
		// end before widget 
		
        echo $before_widget;
		// Display the widget title 
            echo ' <!-- BLOG ARCHIVES BEGIN -->' ;         
            echo' <div id="BlogArchivesWrapper">
        	<div id="BlogArchivesList">';
	        if ($title):
				echo $before_title . $title . $after_title;
			endif;  
	 
      	    echo '<div class="blog-list-archive">';

		$years = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT YEAR(post_date)
										FROM $wpdb->posts
										 WHERE post_status  = %s
										AND post_type       = %s
										ORDER BY post_date DESC", 'publish', $post_type ));
        
        echo '<ul class="archive-menu">';
        $y=0;
		foreach($years as $year) :
                if($selected_year==$year || $y === 0 ) : $ySelected = "year_selected "; else : $ySelected = ''; endif;
                        
		      	echo '<li class="year-archive '.$ySelected.' "><a href="JavaScript:void(0)">'.$year.'</a>';
				     	$months = $wpdb->get_col( $wpdb->prepare("SELECT DISTINCT MONTH(post_date)
											          FROM $wpdb->posts 
											          WHERE post_status     = %s 
											          AND post_type         = %s
											          AND YEAR(post_date)   = %s 
											          ORDER BY post_date DESC",'publish', $post_type, $year));
 				echo '<ul style="display:none" class="archive-sub-menu">';
		        foreach($months as $month) :
                    if($selected_month == $month && $selected_year==$year) : $mselected = 'month_selected'; else : $mselected = ''; endif;
				    echo '<li class="month-archive '.$mselected.'"><a href="'.esc_url(home_url('/').$post_type.'s/'.$year.'/'.$month.'/').'">'.date( 'F', mktime(0, 0, 0, $month) ).'</a>';
		               
				   echo '</li>'; 
				endforeach; 
			    	echo '</ul>
			    </li>';
            $y++;
	 		endforeach; 
   		echo '</ul>';
	 	wp_reset_query();
	   	echo '</div>';          
		echo  $after_widget;
	}  // end of widgets
  
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['post_type'] = strip_tags($new_instance['post_type']);
        return $instance;
    }
    function form($instance) {
        $instance['profile_style'] = array();
        $defaults = array('title' => __('Blog Archives', 'default'), 'post_type' => 'post');
        $instance = wp_parse_args((array) $instance, $defaults);

        $postTypes = $this->get_wp_postTypes();
        
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'default'); ?></label>
            <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>"
                value="<?php echo $instance['title']; ?>" style="width:95%;" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('post_type'); ?>"><?php _e('Post Type:', 'default'); ?></label>
            <select id="<?php echo $this->get_field_id('post_type'); ?>" name="<?php echo $this->get_field_name('post_type'); ?>">
                <option value="">Select Post Type</option>
            <?php 
            foreach ($postTypes as $postType) {
                $selected = "";
                if($instance['post_type'] == $postType) {
                    $selected = "selected='selected'";
                }
                echo '<option '.$selected.' value="'.$postType.'">'.$postType.'</option>';
            }
            ?>
            
        </p>
        <?php
    }

    private function get_wp_postTypes() {
        $args = array(
            'public' => true,
        );

        return $post_types = get_post_types($args, "names");
    }
}