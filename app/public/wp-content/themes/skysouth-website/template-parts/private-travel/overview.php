<?php
/**
 * Template part for private travel overview section
 *
 * @package SkySouth_Website
 */
?>

<!-- Private Travel Overview Section -->
<section class="relative min-h-screen">
    <div class="grid grid-cols-1 lg:grid-cols-2 h-full min-h-screen">
        <!-- Left Half: Navy Background with Text -->
        <div class="bg-[#0a1628] flex items-center justify-center py-16 lg:py-24">
            <div class="w-full max-w-xl px-8 sm:px-12 lg:px-16 translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light mb-6 text-white">
                    Why Fly Private?
                </h1>
                <p class="text-xl text-white/80 font-light leading-relaxed mb-6">
                    Private aviation is about maximizing your time, productivity, and travel efficiency. When you charter with SkySouth, you gain complete control over your schedule and travel experience.
                </p>
                <p class="text-xl text-white/80 font-light leading-relaxed mb-6">
                    From business executives needing to visit multiple cities in one day to families seeking a seamless vacation experience, private charter eliminates the frustrations of commercial travel.
                </p>
            </div>
        </div>

        <!-- Right Half: Full Image -->
        <div class="relative min-h-[400px] lg:min-h-full">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-above-clouds-2.jpg"
                alt="Private Jet Travel"
                class="absolute inset-0 w-full h-full object-cover"
            />
        </div>
    </div>
</section>
