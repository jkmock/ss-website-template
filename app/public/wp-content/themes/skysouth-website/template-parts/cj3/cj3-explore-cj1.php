<?php
/**
 * Template part for CJ3 page - Explore CJ1 section
 *
 * @package SkySouth_Website
 */
?>

<!-- Explore CJ1 Section -->
<section class="relative min-h-screen">
    <div class="grid grid-cols-1 lg:grid-cols-2 h-full min-h-screen">
        <!-- Left Half: Image - Hidden on mobile -->
        <div class="hidden lg:block relative min-h-[400px] lg:min-h-full order-2 lg:order-1">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/cj1-wide.jpg"
                alt="Citation CJ1"
                class="absolute inset-0 w-full h-full object-cover"
            />
        </div>

        <!-- Right Half: Navy Background with Text -->
        <div class="bg-[#0a1628] flex items-center justify-center py-16 lg:py-24 order-1 lg:order-2">
            <div class="w-full max-w-xl px-8 sm:px-12 lg:px-16 translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <p class="text-base lg:text-lg font-light tracking-[0.3em] uppercase text-white/60 mb-4">
                    Cost-Effective Option
                </p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-light mb-6 text-white" style="font-variant-numeric: lining-nums;">
                    Explore the Citation CJ1
                </h2>

                <!-- Image below title - Mobile only -->
                <div class="mb-6 lg:hidden">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/cj1-wide-2.jpg"
                        alt="Citation CJ1"
                        class="w-full h-auto object-cover"
                        style="object-fit: cover; aspect-ratio: 16/9;"
                    />
                </div>

                <p class="text-xl text-white/80 font-light leading-relaxed mb-6">
                    The CJ1 offers an economical entry into private jet travel without sacrificing comfort or reliability. Perfect for trips with up to 5 passengers and a range of 1,200 nautical miles.
                </p>
                <div class="pt-4">
                    <a
                        href="<?php echo esc_url(home_url('/citation-cj1')); ?>"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#0a1628] h-12 px-8"
                    >
                        Learn More About CJ1
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
