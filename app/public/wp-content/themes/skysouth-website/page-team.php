<?php
/**
 * Template Name: Team Page
 * The template for displaying the team page
 *
 * @package SkySouth_Website
 */

get_header();
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Force navbar to scrolled state on team page and keep it that way
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
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-[#0a1628]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light mb-12 text-white">
                    Meet Our Team
                </h1>

                <!-- Large Team Photo -->
                <div class="mb-12">
                    <div class="relative h-[500px] lg:h-[650px] w-full overflow-hidden">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-members.webp"
                            alt="SkySouth Team"
                            class="w-full h-full object-cover shadow-lg"
                        />
                    </div>
                </div>

                <p class="text-xl text-white/80 font-light leading-relaxed">
                    Our dedicated team of aviation professionals is committed to providing exceptional service and ensuring your journey exceeds expectations.
                </p>
            </div>
        </div>
    </section>

    <!-- Team Members Section -->
    <?php get_template_part('template-parts/team/team-members'); ?>
</div>

<?php get_footer(); ?>
