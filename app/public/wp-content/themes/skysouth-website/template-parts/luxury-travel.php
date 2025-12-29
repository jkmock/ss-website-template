<?php
/**
 * Template part for displaying the luxury private jet travel section
 *
 * @package SkySouth_Website
 */
?>

<section id="luxury-travel" class="relative min-h-screen">
    <div class="grid grid-cols-1 lg:grid-cols-2 h-full min-h-screen">
        <!-- Left Half: White Background with Text -->
        <div class="bg-white flex items-center justify-center py-16 lg:py-24">
            <div class="w-full max-w-xl px-8 sm:px-12 lg:px-16 translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <!-- Section Header -->
                <p class="text-lg font-light tracking-[0.3em] uppercase text-foreground/60 mb-4">
                    Elevated Travel
                </p>
                <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-foreground whitespace-nowrap">
                    Luxury Private Jet Travel
                </h2>
                <p class="text-xl text-foreground/70 font-light leading-relaxed mb-8">
                    Private travel gives you unmatched flexibility. Choose your departure time, change plans easily, and reach airports commercial airlines don't serve. It's travel built completely around your needs.
                </p>

                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="<?php echo esc_url(home_url('/private-travel')); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-primary text-primary-foreground hover:bg-primary/90 h-12 px-8">
                        Learn about Private Charters
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Half: Full Image -->
        <div class="relative min-h-[400px] lg:min-h-full">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-above-clouds-2.jpg"
                alt="Luxury Private Jet at Sunset"
                class="absolute inset-0 w-full h-full object-cover"
            />
        </div>
    </div>
</section>
