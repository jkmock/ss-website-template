<?php
/**
 * Template part for displaying the fleet section
 *
 * @package SkySouth_Website
 */

$fleet = array(
    array(
        'name' => 'Citation CJ1',
        'image' => get_template_directory_uri() . '/assets/images/CJ1/cj1-background-2.jpg',
        'range' => '1,200 nm',
        'speed' => '415 mph',
        'guests' => '4-5',
        'price' => '$2,900/hr',
        'description' => 'Cost-effective comfort and flexibility for up to five passengers.',
        'link' => '/citation-cj1',
    ),
    array(
        'name' => 'Citation CJ3',
        'image' => get_template_directory_uri() . '/assets/images/CJ3/cj3-sunset-vertical.jpg',
        'range' => '1,500 nm',
        'speed' => '480 mph',
        'guests' => '6-7',
        'price' => '$3,500/hr',
        'description' => 'The most popular light jet in the industry.  Increased cabin space, speed, and range.',
        'link' => '/citation-cj3',
    ),
);

// SVG Icons
$icons = array(
    'gauge' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>',
    'map-pin' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'users' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
    'dollar-sign' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
);
?>

<section id="fleet" class="py-24 sm:py-32 bg-[#0a1628]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <!-- Section Header -->
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-lg font-light tracking-[0.3em] uppercase text-white/60 mb-4">
                Our Aircraft
            </p>
            <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-white">
                Discover Our Fleet
            </h2>
            <p class="text-xl text-white/70 font-light leading-relaxed whitespace-nowrap">
                Our jets are meticulously maintained and ready to exceed your expectations.
            </p>
        </div>
    </div>

    <!-- Fleet Grid -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10">
            <?php foreach ($fleet as $index => $jet) : ?>
                <div class="jet-card relative h-[750px] overflow-hidden group" data-index="<?php echo $index; ?>">
                    <!-- Background Image with Parallax -->
                    <div class="jet-parallax absolute inset-0 transition-transform duration-100 ease-out">
                        <img
                            src="<?php echo esc_url($jet['image']); ?>"
                            alt="<?php echo esc_attr($jet['name']); ?>"
                            class="h-full w-full object-cover scale-100"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    </div>

                    <!-- Content Overlay -->
                    <div class="relative h-full flex flex-col justify-end p-8 md:p-12 translate-y-12 opacity-0 jet-content">
                        <!-- Subtle darkening behind text -->
                        <div class="absolute bottom-0 left-0 right-0 h-2/3 bg-gradient-to-t from-black/40 to-transparent -z-10"></div>

                        <!-- Aircraft Type -->
                        <h3 class="font-serif text-4xl md:text-5xl font-light text-white mb-6 lining-nums">
                            <?php echo esc_html($jet['name']); ?>
                        </h3>

                        <!-- Description -->
                        <p class="text-white text-lg font-light leading-relaxed mb-8 max-w-md">
                            <?php echo esc_html($jet['description']); ?>
                        </p>

                        <!-- Specifications -->
                        <div class="flex gap-6 mb-8 pb-8 border-b border-white/20">
                            <div class="flex flex-col">
                                <div class="text-white mb-2"><?php echo $icons['gauge']; ?></div>
                                <span class="text-lg font-light text-white/70 uppercase tracking-wider">Speed</span>
                                <span class="text-xl font-light text-white mt-1"><?php echo esc_html($jet['speed']); ?></span>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-white mb-2"><?php echo $icons['map-pin']; ?></div>
                                <span class="text-lg font-light text-white/70 uppercase tracking-wider">Range</span>
                                <span class="text-xl font-light text-white mt-1"><?php echo esc_html($jet['range']); ?></span>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-white mb-2"><?php echo $icons['users']; ?></div>
                                <span class="text-lg font-light text-white/70 uppercase tracking-wider">Guests</span>
                                <span class="text-xl font-light text-white mt-1"><?php echo esc_html($jet['guests']); ?></span>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-white mb-2"><?php echo $icons['dollar-sign']; ?></div>
                                <span class="text-lg font-light text-white/70 uppercase tracking-wider">From</span>
                                <span class="text-xl font-light text-white mt-1"><?php echo esc_html($jet['price']); ?></span>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="flex gap-4">
                            <a href="<?php echo esc_url($jet['link']); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-white text-foreground hover:bg-white/90 px-8 h-10">
                                Learn more
                            </a>
                            <a href="#contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none border-2 border-white bg-transparent text-white hover:bg-white hover:text-foreground px-8 h-10">
                                24/7 Charter Dispatch
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const jetCards = document.querySelectorAll('.jet-card');

    // Intersection Observer for fade-in animation
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const content = entry.target.querySelector('.jet-content');
                    content.classList.remove('translate-y-12', 'opacity-0');
                    content.classList.add('translate-y-0', 'opacity-100');
                }
            });
        },
        { threshold: 0.2 }
    );

    jetCards.forEach(card => {
        observer.observe(card);

        // Parallax effect on scroll
        const parallaxElement = card.querySelector('.jet-parallax');

        function updateParallax() {
            const rect = card.getBoundingClientRect();
            const scrollProgress = Math.max(0, Math.min(1, 1 - rect.top / window.innerHeight));
            const scrollY = scrollProgress * 80;
            parallaxElement.style.transform = `translateY(${scrollY}px)`;
        }

        window.addEventListener('scroll', updateParallax);
        updateParallax();
    });
});
</script>
