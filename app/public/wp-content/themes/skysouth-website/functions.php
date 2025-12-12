<?php
if (!defined('ABSPATH')) exit;

function custom_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 675, true);

    // Add custom image sizes for blog posts
    add_image_size('skysouth-featured', 1200, 675, true);
    add_image_size('skysouth-thumbnail', 400, 300, true);

    // Enable support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Switch default core markup for search form, comment form, and comments
    // to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for Block Styles
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for custom line height
    add_theme_support('custom-line-height');

    // Add support for experimental link color control
    add_theme_support('experimental-link-color');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'skysouth-website'),
        'footer'  => __('Footer Menu', 'skysouth-website'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');

function custom_theme_assets() {
    // Enqueue the compiled Tailwind CSS with timestamp for cache busting during development
    wp_enqueue_style('skysouth-main-style', get_template_directory_uri() . '/dist/style.css', array(), filemtime(get_template_directory() . '/dist/style.css'));
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');

// Add custom body classes
function skysouth_body_classes($classes) {
    $classes[] = 'antialiased';
    return $classes;
}
add_filter('body_class', 'skysouth_body_classes');

// Custom excerpt length
function skysouth_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'skysouth_excerpt_length');

// Custom excerpt more
function skysouth_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'skysouth_excerpt_more');

// Add support for Yoast SEO breadcrumbs
function skysouth_yoast_breadcrumb_support() {
    return current_theme_supports('yoast-seo-breadcrumbs');
}
add_theme_support('yoast-seo-breadcrumbs');

// Add custom pagination styling
function skysouth_pagination_classes($classes) {
    $classes = str_replace('page-numbers', 'inline-flex items-center justify-center h-10 px-4 rounded-md font-medium transition-colors', $classes);
    $classes = str_replace('current', 'bg-primary text-primary-foreground', $classes);
    $classes = str_replace('prev', 'border border-input bg-background hover:bg-accent hover:text-accent-foreground', $classes);
    $classes = str_replace('next', 'border border-input bg-background hover:bg-accent hover:text-accent-foreground', $classes);
    return $classes;
}

// Enable WordPress Block Editor (Gutenberg) with custom styles
function skysouth_add_editor_styles() {
    add_editor_style('dist/style.css');
}
add_action('admin_init', 'skysouth_add_editor_styles');

// Add Tailwind prose classes to post content
function skysouth_content_class($content) {
    if (is_singular('post')) {
        return $content;
    }
    return $content;
}

// Register widget areas (for footer, sidebar if needed)
function skysouth_widgets_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'skysouth-website'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your blog sidebar.', 'skysouth-website'),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="font-serif text-2xl font-light mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'skysouth_widgets_init');
?>