<!-- Hero Section -->
<section class="relative w-full overflow-hidden" style="height: 100vh;">
    <!-- Background Image -->
    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/cj1-hero-2.jpg"
        alt="Citation CJ1"
        class="absolute inset-0 w-full h-full object-cover"
        style="object-position: center 19%;"
    />

    <!-- Left-Aligned Content -->
    <div class="relative h-full flex items-center">
        <div class="container mx-auto px-8 sm:px-12 lg:px-16">
            <div class="max-w-2xl text-white translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <!-- Tagline -->
                <p class="text-sm font-light tracking-[0.3em] uppercase text-white/80 mb-6">
                    The Perfect Regional Jet
                </p>

                <!-- Title -->
                <h1 class="font-serif text-6xl sm:text-7xl md:text-8xl font-light mb-8">
                    Citation CJ1
                </h1>

                <!-- Description -->
                <div class="space-y-4 mb-10">
                    <p class="text-xl font-light leading-relaxed text-white/90">
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
