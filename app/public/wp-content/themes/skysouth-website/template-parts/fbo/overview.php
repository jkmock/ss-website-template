<?php
/**
 * Template part for FBO services overview section
 *
 * @package SkySouth_Website
 */
?>

<!-- FBO Services Overview Section -->
<section class="relative h-screen w-full bg-[#0a1628] flex items-center justify-center pt-20">
    <!-- Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light mb-8 text-white">
                FBO Services
            </h1>

            <!-- Large Jet Image -->
            <div class="flex justify-center mb-6">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/Other/large-jet-2.jpg"
                    alt="FBO Services Aircraft"
                    class="max-w-2xl w-full h-auto shadow-2xl"
                />
            </div>

            <p class="text-xl text-white/80 font-light leading-relaxed max-w-3xl mx-auto">
                Full-service FBO at Burlington-Alamance Regional Airport (KBUY). We provide fuel, ground handling, and amenities for any size of private aircraft.
            </p>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <button
        onclick="scrollToContent()"
        class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce cursor-pointer"
        aria-label="Scroll down"
    >
        <!-- ChevronDown SVG icon -->
        <svg class="h-8 w-8 text-white opacity-75" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
