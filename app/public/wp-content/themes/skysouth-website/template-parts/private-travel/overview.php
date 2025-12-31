<?php
/**
 * Template part for private travel overview section
 *
 * @package SkySouth_Website
 */
?>

<!-- Private Travel Overview Section -->
<section class="relative bg-[#0a1628]">
    <div class="lg:grid lg:grid-cols-[45%_55%] lg:h-screen">
        <!-- Text Content -->
        <div class="flex items-center justify-center py-16 lg:py-24">
            <div class="w-full max-w-xl px-8 sm:px-12 lg:px-16">
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light mb-6 md:mb-8 lg:mb-6 mt-16 lg:mt-0 text-white">
                    Why Fly Private?
                </h1>

                <!-- Mobile/Tablet Image: Between title and text -->
                <div class="lg:hidden mb-6">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/sunsetjet4.jpg"
                        alt="Private Jet Travel"
                        class="w-full h-64 object-cover"
                    />
                </div>

                <p class="text-xl text-white/80 font-light leading-relaxed mb-6">
                    Private aviation is about maximizing your time, productivity, and travel efficiency. When you charter with SkySouth, you gain complete control over your schedule and travel experience.
                </p>
                <p class="text-xl text-white/80 font-light leading-relaxed mb-6">
                    From business executives needing to visit multiple cities in one day to families seeking a seamless vacation experience, private charter eliminates the frustrations of commercial travel.
                </p>
            </div>
        </div>

        <!-- Desktop Image: Right side -->
        <div class="hidden lg:flex lg:items-center lg:justify-center relative h-full">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/sunsetjet4.jpg"
                alt="Private Jet Travel"
                class="w-[85%] h-auto object-cover object-center shadow-2xl"
            />
        </div>
    </div>
</section>
