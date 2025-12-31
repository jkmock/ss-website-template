<?php
/**
 * Template part for displaying the hero section
 *
 * @package SkySouth_Website
 */

// Hero content - can be moved to Customizer or ACF fields later
$hero_tagline = 'SkySouth Aviation';
$hero_heading = 'Get There Faster.<br>Get Home Sooner.';
$hero_description = 'We fly jets across the Eastern US and beyond.<br class="hidden lg:block"> Established in Burlington, NC in 2003.';
$hero_image = get_template_directory_uri() . '/assets/images/CJ3/cj3-sunset-15.jpg';
$hero_button_1_text = 'View our Fleet';
$hero_button_1_link = '#fleet'; // Update with actual link
$hero_button_2_text = '24/7 Charter Dispatch';
$hero_button_2_link = '#contact'; // Update with actual link
?>

<section class="hero-section relative h-screen w-full overflow-hidden">
    <!-- Background Image - Desktop -->
    <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Luxury private jet at sunset"
        class="hidden lg:block absolute inset-0 w-full h-full object-cover object-left"
    />

    <!-- Background Image - Mobile Only -->
    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/hero-mobile-6.jpg"
        alt="Luxury private jet at sunset"
        class="block md:hidden absolute inset-0 w-full h-full object-cover"
    />

    <!-- Background Image - Tablet -->
    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-sunset-16.jpg"
        alt="Luxury private jet at sunset"
        class="hidden md:block lg:hidden absolute inset-0 w-full h-full object-cover"
    />

    <!-- Gradient Overlay - Mobile & Tablet Only -->
    <div class="block lg:hidden absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/60"></div>

    <!-- Content -->
    <div class="relative h-full flex items-end pb-32 md:pb-48 lg:items-center lg:pb-0">
        <div class="container mx-auto px-8 sm:px-12 lg:px-16">
            <div class="max-w-xl lg:max-w-5xl text-white translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <p class="hidden lg:block mb-6 text-lg font-light tracking-[0.3em] uppercase text-white/80">
                    <?php echo esc_html($hero_tagline); ?>
                </p>
                <h1 class="hero-title font-serif text-3xl sm:text-6xl lg:text-6xl font-light leading-tight mb-6 sm:mb-8 max-w-4xl">
                    <?php echo wp_kses_post($hero_heading); ?>
                </h1>
                <p class="text-base sm:text-xl font-light leading-relaxed mb-8 sm:mb-10 max-w-2xl text-white/90">
                    <?php echo wp_kses_post($hero_description); ?>
                </p>
                <div class="flex flex-col sm:flex-row items-start gap-4">
                    <a
                        href="<?php echo esc_url($hero_button_1_link); ?>"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none border-2 border-white text-white bg-transparent hover:bg-white hover:text-foreground h-12 px-8 text-base w-full sm:w-auto"
                    >
                        <?php echo esc_html($hero_button_1_text); ?>
                    </a>
                    <a
                        href="<?php echo esc_url($hero_button_2_link); ?>"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none border-2 border-transparent bg-white text-foreground hover:bg-white/90 h-12 px-8 text-base w-full sm:w-auto"
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
        font-size: 2.75rem !important; /* 44px */
    }

    .hero-section [data-animate] {
        max-width: 42rem !important; /* 672px - max-w-2xl */
    }

    .hero-section [data-animate] p {
        font-size: 1.25rem !important; /* 20px */
        max-width: 32rem !important; /* 512px - max-w-lg */
    }
}

@media (min-width: 1440px) {
    .hero-title {
        font-size: 3.5rem !important; /* 56px */
    }

    .hero-section [data-animate] {
        max-width: 48rem !important; /* 768px - max-w-3xl */
    }

    .hero-section [data-animate] p {
        font-size: 1.5rem !important; /* 24px */
    }
}
</style>
