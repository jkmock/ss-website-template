<?php
/**
 * Template part for displaying the hero section
 *
 * @package SkySouth_Website
 */

// Hero content - can be moved to Customizer or ACF fields later
$hero_tagline = 'Elevate Your Journey';
$hero_heading = 'Uncompromising Service. Competitive Light Jet Rates.';
$hero_description = 'Established in 2003, we provide premier light jet charter services. We serve trips throughout the Eastern U.S. from our base in Burlington, NC.';
$hero_image = get_template_directory_uri() . '/assets/images/sunsetjet2.jpg';
$hero_button_1_text = 'View our Fleet';
$hero_button_1_link = '#fleet'; // Update with actual link
$hero_button_2_text = '24/7 Charter Dispatch';
$hero_button_2_link = '#contact'; // Update with actual link
?>

<section class="relative h-screen w-full overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img
            src="<?php echo esc_url($hero_image); ?>"
            alt="Luxury private jet at sunset"
            class="h-full w-full object-cover object-left scale-100"
            style="transform-origin: left center;"
        />
        <!-- Overlay for better text readability -->
        <div class="absolute inset-0 bg-black/30"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 flex h-full items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl text-left text-white">
                <p class="mb-6 text-lg font-light tracking-[0.3em] uppercase opacity-90">
                    <?php echo esc_html($hero_tagline); ?>
                </p>
                <h1 class="hero-title font-serif text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-light leading-tight mb-8 max-w-4xl">
                    <?php echo esc_html($hero_heading); ?>
                </h1>
                <p class="text-l md:text-xl font-light leading-relaxed mb-12 max-w-2xl opacity-90">
                    <?php echo esc_html($hero_description); ?>
                </p>
                <div class="flex flex-col sm:flex-row items-start gap-4">
                    <a
                        href="<?php echo esc_url($hero_button_1_link); ?>"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none border-2 border-white text-white bg-transparent hover:bg-white hover:text-foreground h-12 px-8 text-base w-full sm:w-56"
                    >
                        <?php echo esc_html($hero_button_1_text); ?>
                    </a>
                    <a
                        href="<?php echo esc_url($hero_button_2_link); ?>"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none border-2 border-transparent bg-white text-foreground hover:bg-white/90 h-12 px-8 text-base w-full sm:w-56"
                    >
                        <?php echo esc_html($hero_button_2_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <button
        onclick="scrollToContent()"
        class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce cursor-pointer"
        aria-label="Scroll down"
    >
        <!-- ChevronDown SVG icon -->
        <svg class="h-12 w-12 text-white opacity-75" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6"/>
        </svg>
    </button>
</section>

<script>
function scrollToContent() {
    window.scrollTo({
        top: window.innerHeight,
        behavior: 'smooth'
    });
}
</script>

<style>
@media (min-width: 1024px) and (max-width: 1439px) {
    .hero-title {
        font-size: 3.75rem !important; /* 60px - text-6xl size */
    }
}
</style>
