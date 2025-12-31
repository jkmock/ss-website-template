<?php
/**
 * Template part for heart transplant teams section
 *
 * @package SkySouth_Website
 */
?>

<!-- Heart Transplant Teams Section -->
<section class="relative min-h-screen">
    <div class="grid grid-cols-1 lg:grid-cols-2 h-full min-h-screen">
        <!-- Left Half: White Background with Text -->
        <div class="bg-white flex items-center justify-center py-16 lg:py-24">
            <div class="medical-content w-full max-w-xl px-8 sm:px-12 lg:px-16 translate-y-12 opacity-0 transition-all duration-700">
                <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-foreground">
                    Heart Transplant Teams
                </h2>

                <!-- Mobile/Tablet Image: Between title and text -->
                <div class="lg:hidden mb-6">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-sunset-vertical-centered.jpg"
                        alt="Heart Transplant Medical Transport"
                        class="w-full h-64 object-cover"
                    />
                </div>

                <div class="space-y-4 text-xl text-foreground/70 font-light leading-relaxed mb-8">
                    <p>
                        Our pilots regularly fly with heart transplant teams, providing rapid and reliable transportation for these vital missions. When time is critical, medical networks count on our ability to respond rapidly and get a crew in the air without delay. Our efficiency, dependability, and flexibility help give these teams the best possible chance at a successful procedure.
                    </p>
                    <p>
                        Most teams prefer our CJ3 for its increased speed, amenities, and cabin space.
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="<?php echo esc_url(home_url('/citation-cj3')); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-primary text-primary-foreground hover:bg-primary/90 h-12 px-8">
                        Explore the CJ3
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Half: Full Image - Desktop Only -->
        <div class="hidden lg:block medical-image relative min-h-[400px] lg:min-h-full translate-y-12 opacity-0 transition-all duration-700">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-sunset-vertical-centered.jpg"
                alt="Heart Transplant Medical Transport"
                class="absolute inset-0 w-full h-full object-cover"
            />
        </div>
    </div>
</section>
