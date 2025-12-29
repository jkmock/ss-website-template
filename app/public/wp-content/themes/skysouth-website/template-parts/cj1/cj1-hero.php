<!-- Hero Section -->
<section class="relative w-full overflow-hidden" style="height: 100vh;">
    <!-- Background Image - Desktop & Horizontal Tablet -->
    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/cj1-hero-2.jpg"
        alt="Citation CJ1"
        class="hidden lg:block absolute inset-0 w-full h-full object-cover cj1-hero-bg"
    />

    <!-- Background Image - Mobile & Vertical Tablet -->
    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/cj1-background-3.jpg"
        alt="Citation CJ1"
        class="block lg:hidden absolute inset-0 w-full h-full object-cover cj1-hero-bg-mobile"
    />

    <!-- Gradient Overlay - Mobile & Vertical Tablet Only -->
    <div class="block lg:hidden absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/60"></div>

    <!-- Left-Aligned Content -->
    <div class="relative h-full flex items-end lg:items-center pb-32 lg:pb-0">
        <div class="container mx-auto px-8 sm:px-12 lg:px-16">
            <div class="max-w-xl lg:max-w-lg xl:max-w-xl 2xl:max-w-2xl text-white translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <!-- Tagline -->
                <p class="hidden lg:block text-lg font-light tracking-[0.3em] uppercase text-white/80 mb-6">
                    The Perfect Regional Jet
                </p>

                <!-- Title -->
                <h1 class="font-serif text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-light mb-8" style="font-variant-numeric: lining-nums;">
                    Citation CJ1
                </h1>

                <!-- Description -->
                <div class="space-y-4 mb-10">
                    <p class="text-lg sm:text-xl font-light leading-relaxed text-white/90">
                        The CJ1 is the perfect entry into the the world of private jet travel. Experience the luxury and convenience of traveling on your own time and flying in a quiet, private cabin.
                    </p>
                </div>

                <!-- CTA Button -->
                <div>
                    <a href="#contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-transparent border-2 border-white text-white hover:bg-white hover:text-foreground px-8 h-12 text-base">
                        Request a Quote
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
/* Mobile & Vertical Tablet - show more of top */
@media (max-width: 1023px) {
    .cj1-hero-bg-mobile {
        object-position: center top !important;
    }
}

/* Horizontal Tablet / Small Desktop */
@media (min-width: 1024px) and (max-width: 1279px) {
    .cj1-hero-bg {
        object-position: 60% 10% !important;
    }
}

/* Desktop */
@media (min-width: 1280px) {
    .cj1-hero-bg {
        object-position: center 19% !important;
    }
}
</style>
