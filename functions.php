<?php



// for the featured image activation





function load_stylesAndScripts(){
      
    $path = get_template_directory_uri();
     
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap');
    wp_enqueue_style('bootstrap',   '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array() , '1.0', 'all');
    wp_enqueue_style('owl-carousel', $path . '/css/owl.carousel.min.css', array() , '1.0', 'all');
    wp_enqueue_style('owl-carousel-theme', $path . '/css/owl.theme.default.min.css', array() , '1.0', 'all');
    wp_enqueue_style('font-awesome',   '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array() , '1.0', 'all');
    wp_enqueue_style('jquiryui',   '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css', array() , '1.0', 'all');
    wp_enqueue_style('main_style', get_stylesheet_uri() , NULL , microtime()    );                                
      
    wp_enqueue_script('jquery-new',  '//code.jquery.com/jquery-3.5.1.min.js', array() , microtime() , true);     
    wp_enqueue_script('jquiry-ui-js',  '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array() , microtime() , true);     
    wp_enqueue_script('popper',  '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array() , microtime() , true);     
    wp_enqueue_script('bootstrap',  '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array() , microtime() , true);     
    wp_enqueue_script('jqueryCalander',  '//cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js', array() , microtime() , true);     
    wp_enqueue_script('owl-carousel-js',  $path  . '/js/owl.carousel.min.js', array() , microtime() , true);     
    wp_enqueue_script('js-main-scripts',  $path  . '/js/script.js', array() , microtime() , true);     
 }
 
add_action('wp_enqueue_scripts', 'load_stylesAndScripts');



function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'theme_features' );




// Our custom post type function
function create_posttype() {

    add_post_type_support( 'portfolio', 'thumbnail' );    
    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfolios' ),
                'add_new_item' => __( 'Add New Portfolio' ),
                'edit_item' => __( 'Edit Portfolio' ),
                'all_items' => __( 'All Portfolios' ),
                'singular_name' => __( 'Portfolio' ),
            ),
            'menu_icon' => 'dashicons-calendar',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolios'),
            'show_in_rest' => true,
        )
    );






     register_post_type( 'port',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Ports' ),
                'add_new_item' => __( 'Add New Port' ),
                'edit_item' => __( 'Edit Port' ),
                'all_items' => __( 'All Ports' ),
                'singular_name' => __( 'Port' ),
            ),
            'supports' => array( 'title', 'editor',  'thumbnail', 'excerpt' ) ,
            'menu_icon' => 'dashicons-admin-site-alt',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'ports'),
            'show_in_rest' => true,
        )
    );







     register_post_type( 'service',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'add_new_item' => __( 'Add New Service' ),
                'edit_item' => __( 'Edit Service' ),
                'all_items' => __( 'All Services' ),
                'singular_name' => __( 'Service' ),
            ),
            'supports' => array( 'title', 'editor',  'thumbnail', 'excerpt' ) ,
            'menu_icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
        )
    );




}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );







//custom pagination for news
function bittersweet_pagination()
{
    global $wp_query;

    if ($wp_query->max_num_pages <= 1) return;

    $big = 999999999; // need an unlikely integer
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))) ,
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')) ,
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_next' => 0,
        'before_page_number' => 0
    ));
    if (is_array($pages))
    {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<div class="news-pagination-wrap"><ul class="news-pagination">';
        foreach ($pages as $page)
        {
            echo "<li>$page</li>";
        }
        echo '</ul></div>';
    }
};


 


 














?>