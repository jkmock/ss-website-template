<?php
/**
 * Template part for medical services overview section
 *
 * @package SkySouth_Website
 */
?>

<!-- Medical Services Overview Section -->
<section class="relative h-screen w-full bg-[#0a1628] flex items-center justify-center">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light mb-8 text-white">
                Medical Services
            </h1>

            <!-- Heart Pulse Icon -->
            <div class="flex justify-center mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                    <path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/>
                </svg>
            </div>

            <p class="text-xl text-white/80 font-light leading-relaxed mb-8">
                Our pilots routinely support critical medical missions, including organ transport, transplant teams, and time-sensitive laboratory samples. With 24/7 availability and a strong safety record, we provide the dependable support hospitals and medical networks rely on for lifesaving missions.
            </p>

            <!-- CTA Button -->
            <div class="pt-4">
                <a href="#contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-transparent text-white border-2 border-white hover:bg-white hover:text-[#0a1628] h-12 px-8">
                    24/7 Charter Dispatch
                </a>
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
