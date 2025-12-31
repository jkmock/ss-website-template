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
            <div class="w-full max-w-xl px-8 sm:px-12 lg:px-16 translate-y-12 opacity-0 transition-all duration-1000 ease-out text-center lg:text-left" data-animate>
                <!-- Section Header -->
                <p class="text-lg font-light tracking-[0.3em] uppercase text-foreground/60 mb-4">
                    Elevated Travel
                </p>
                <h2 class="font-serif text-4xl sm:text-5xl font-light mb-8 lg:mb-6 text-foreground">
                    Luxury Private<br class="lg:hidden"> Jet Travel
                </h2>
                <!-- Mobile Image: Show below title on mobile only -->
                <div class="lg:hidden mb-6">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-above-clouds-2.jpg"
                        alt="Luxury Private Jet at Sunset"
                        class="w-full h-64 object-cover"
                    />
                </div>
                <p class="text-xl text-foreground/70 font-light leading-relaxed mb-8 text-left">
                    Private travel gives you unmatched flexibility. Choose your departure time, change plans easily, and reach airports commercial airlines don't serve. It's travel built completely around your needs.
                </p>

                <!-- CTA Button -->
                <div class="pt-4 flex justify-center lg:justify-start">
                    <a href="<?php echo esc_url(home_url('/private-travel')); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-primary text-primary-foreground hover:bg-primary/90 h-12 px-8">
                        Learn about Private Charters
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Half: Centered Image -->
        <div class="relative min-h-[400px] lg:min-h-screen hidden lg:flex lg:items-center lg:justify-center lg:p-12">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-above-clouds-2.jpg"
                alt="Luxury Private Jet at Sunset"
                class="w-full max-w-2xl h-auto object-cover shadow-2xl"
            />
        </div>
    </div>
</section>
