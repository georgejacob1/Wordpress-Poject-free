<?php
// Theme setup function
function my_custom_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag'); // Adds support for <title> tag
    add_theme_support('post-thumbnails'); // Adds support for post thumbnails
    add_theme_support('automatic-feed-links'); // Adds support for RSS feed links

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
        'footer' => __('Footer Menu', 'my-custom-theme'),
    ));

    // Register widget areas
    register_sidebar(array(
        'name'          => __('Sidebar', 'my-custom-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets added here will appear in the sidebar.', 'my-custom-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Enqueue styles and scripts
function my_custom_theme_enqueue_scripts() {
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owlcarousel-style', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('tempusdominus-style', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('style-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    wp_enqueue_script('jquery'); // Enqueue jQuery
    wp_enqueue_script('wow-script', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing-script', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints-script', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('counterup-script', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('owlcarousel-script', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('tempusdominus-script', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', array('jquery'), null, true);
    wp_enqueue_script('timezone-script', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', array('jquery'), null, true);
    wp_enqueue_script('tempusdominus-script', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');

// Register a custom post type
// function my_custom_post_type() {
//     register_post_type('my_custom_post',
//         array(
//             'labels' => array(
//                 'name' => __('Custom Posts', 'my-custom-theme'),
//                 'singular_name' => __('Custom Post', 'my-custom-theme'),
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'supports' => array('title', 'editor', 'thumbnail'),
//             'rewrite' => array('slug' => 'custom-posts'),
//         )
//     );
// }
// add_action('init', 'my_custom_post_type');

// Custom excerpt length
function my_custom_excerpt_length($length) {
    return 20; // Set the excerpt length to 20 words
}
add_filter('excerpt_length', 'my_custom_excerpt_length');

// Custom excerpt more text
function my_custom_excerpt_more($more) {
    return '... <a class="read-more" href="' . get_permalink() . '">Read More</a>';
}
add_filter('excerpt_more', 'my_custom_excerpt_more');

// Disable WordPress admin bar
if (!current_user_can('administrator')) {
    add_filter('show_admin_bar', '__return_false');
}

// Custom login logo
// function my_custom_login_logo() {
//     echo '<style type="text/css">
//         h1 a { background-image: url(' . get_template_directory_uri() . '/images/custom-login-logo.png) !important; }
//     </style>';
// }
// add_action('login_head', 'my_custom_login_logo');





function my_login_logo_one()
{
?>
  <style type="text/css">
    body.login div#login h1 a {
      background-image: url("<?php echo get_template_directory_uri(); ?>/images/logo.png");
      width: 220px !important;
      background-size: 150px !important;
      height: 115px !important;
    }

    body.login-action-login {
      background: #ffffff !important;
    }

    body.login-action-login #backtoblog a,
    body.login-action-login #nav a {
      color: #000000 !important;
    }

    body.login-action-login.wp-core-ui .button-primary {
      background: #db3752 !important;
      box-shadow: none !important;
      border: 0px !important;
      text-shadow: none !important;
    }

    body.login-action-login form#loginform {
      border-radius: 8px;
    }

    .login h1 a {
      width: 180px !important;
      background-size: 170px !important;
      height: 95px !important;
    }

    form#loginform {
      background: #ffffff !important;
    }

    form#loginform p label {
      color: #000000 !important;
    }

    .user-pass-wrap {
      color: #000000 !important;
    }

    form#loginform input#wp-submit {
      background: #940047 !important;
      color: #fff !important;
      font-weight: 600;
    }

    form#loginform #nav a,
    .login #backtoblog a {
      color: #000 !important;
    }

    .login h1 a {
      width: 180px !important;
      background-size: 180px !important;
      height: 120px !important;
      outline: none !important;
    }

    .login h1 a:focus {
      box-shadow: none !important;
    }

    .login #nav {
      color: #185abc;
    }

    .login #backtoblog {
      color: #185abc;
    }

    .login h1 a {
      width: 250px !important;
      background-size: 200px !important;
      height: 120px !important;
    }
  </style>

<?php
}
add_action('login_enqueue_scripts', 'my_login_logo_one');
function my_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');
function add_my_favicon()
{
  $favicon_path = get_template_directory_uri() . '/images/favicon.ico';

  echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
}
add_action('admin_head', 'add_my_favicon'); //admin end
add_action('wp_head', 'add_my_favicon'); //front end
add_action('login_head', 'add_my_favicon'); //front end



