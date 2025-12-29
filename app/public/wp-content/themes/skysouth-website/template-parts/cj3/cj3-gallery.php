<!-- Photo Gallery Section -->
<section class="py-24 sm:py-32 bg-[#0a1628]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16 translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <p class="text-sm font-light tracking-[0.3em] uppercase text-white/60 mb-4">
                    Gallery
                </p>
                <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-white">
                    Explore the CJ3
                </h2>

            </div>

            <!-- Carousel Container -->
            <div class="relative max-w-4xl mx-auto translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <!-- Image Container -->
                <div class="relative overflow-hidden shadow-2xl aspect-[16/10]">
                    <!-- Gallery Images -->
                    <div id="gallery-track" class="flex transition-transform duration-500 ease-out h-full">
                        <div class="gallery-slide min-w-full h-full">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ3/cj3-taxiway.avif"
                                alt="Citation CJ1 Exterior"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="gallery-slide min-w-full h-full">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/cj1-interior.jpg"
                                alt="Citation CJ1 Interior"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="gallery-slide min-w-full h-full">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/CJ1/cj1-background.jpg"
                                alt="Citation CJ1 Detail"
                                class="w-full h-full object-cover"
                            />
                        </div>
                    </div>

                    <!-- Navigation Arrows -->
                    <button
                        id="prev-btn"
                        class="absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white rounded-full p-3 transition-all duration-200 hover:scale-110"
                        aria-label="Previous image"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button
                        id="next-btn"
                        class="absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white rounded-full p-3 transition-all duration-200 hover:scale-110"
                        aria-label="Next image"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <!-- Gradient Overlays for better arrow visibility -->
                    <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-black/30 to-transparent pointer-events-none"></div>
                    <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-black/30 to-transparent pointer-events-none"></div>
                </div>

                <!-- Dot Indicators -->
                <div class="flex justify-center gap-2 mt-6">
                    <button class="gallery-dot w-2.5 h-2.5 rounded-full bg-white transition-all duration-300" data-index="0"></button>
                    <button class="gallery-dot w-2.5 h-2.5 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300" data-index="1"></button>
                    <button class="gallery-dot w-2.5 h-2.5 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300" data-index="2"></button>
                </div>
            </div>
        </div>
    </div>
</section>
