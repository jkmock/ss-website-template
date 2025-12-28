<?php
/**
 * Template Name: Private Travel Page
 * The template for displaying the private travel page
 *
 * @package SkySouth_Website
 */

get_header();
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Force navbar to scrolled state on private travel page and keep it that way
    const nav = document.getElementById('main-navigation');
    const navLogo = document.getElementById('nav-logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileMenuButton = document.getElementById('mobile-menu-button');

    const logoGray = '<?php echo esc_url(get_template_directory_uri() . '/assets/logos/ss-logo-gray-navy-left.png'); ?>';

    function applyScrolledState() {
        // Apply scrolled state
        nav.classList.remove('bg-transparent', 'border-transparent');
        nav.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'border-border');
        navLogo.src = logoGray;

        // Update desktop nav links
        navLinks.forEach(link => {
            link.classList.remove('text-white', 'hover:text-white/80');
            link.classList.add('text-foreground', 'hover:text-foreground/70');
        });

        // Update mobile menu button
        mobileMenuButton.classList.remove('text-white', 'hover:text-white/80');
        mobileMenuButton.classList.add('text-foreground');
    }

    // Apply immediately
    applyScrolledState();

    // Override the scroll handler by listening after it and forcing the state
    window.addEventListener('scroll', function() {
        // Run after the navigation.php scroll handler
        setTimeout(applyScrolledState, 0);
    });
});
</script>

<div class="min-h-screen">
    <!-- Private Travel Overview Section -->
    <?php get_template_part('template-parts/private-travel/overview'); ?>

    <!-- Flexibility Section -->
    <?php get_template_part('template-parts/private-travel/time'); ?>

    <!-- Our Fleet Section -->
    <?php get_template_part('template-parts/private-travel/more-destinations'); ?>

    <!-- Experience Section -->
    <?php get_template_part('template-parts/private-travel/experience'); ?>

    <!-- Contact Section -->
    <div class="private-travel-section contact">
        <?php get_template_part('template-parts/contact'); ?>
    </div>

    <!-- Private Travel Animations -->
    <?php get_template_part('template-parts/private-travel/animations'); ?>
</div>

<?php get_template_part('template-parts/scripts'); ?>

<?php get_footer(); ?>
