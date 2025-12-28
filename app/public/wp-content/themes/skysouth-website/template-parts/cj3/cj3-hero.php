<!-- Hero Section -->
<section class="relative w-full overflow-hidden" style="height: 100vh;">
    <!-- Background Image -->
    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-sunset-2.jpg"
        alt="Citation CJ1"
        class="absolute inset-0 w-full h-full object-cover"
        style="object-position: center 19%;"
    />

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/40 to-black/60"></div>

    <!-- Centered Content -->
    <div class="relative h-full flex items-center justify-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <!-- Tagline -->
                <p class="text-sm font-light tracking-[0.3em] uppercase text-white/80 mb-6">
                    The Perfect Regional Jet
                </p>

                <!-- Title -->
                <h1 class="font-serif text-6xl sm:text-7xl md:text-8xl font-light mb-8">
                    Citation CJ3
                </h1>

                <!-- Description -->
                <div class="max-w-2xl mx-auto space-y-4 mb-10">
                    <p class="text-lg font-light leading-relaxed text-white/90">
                        The CJ3 has become a go-to option in the light jet category. It's comfort, speed, and range make it a leader in the segment.
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="mt-16">
                    <a href="#contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all outline-none bg-white text-foreground hover:bg-white/90 px-8 h-12 text-base">
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
