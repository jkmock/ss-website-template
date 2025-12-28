<?php
/**
 * Template part for displaying the Destinations section
 *
 * @package SkySouth_Website
 */

$destinations = array(
    array(
        'name' => 'Miami',
        'location' => 'Florida',
        'image' => 'https://images.unsplash.com/photo-1506966953602-c20cc11f75e3?q=80&w=2070&auto=format&fit=crop',
    ),
    array(
        'name' => 'New York City',
        'location' => 'New York',
        'image' => 'https://images.unsplash.com/photo-1496588152823-86ff7695e68f?q=80&w=2070&auto=format&fit=crop',
    ),
    array(
        'name' => 'The Bahamas',
        'location' => 'Caribbean',
        'image' => 'https://images.unsplash.com/photo-1548574505-5e239809ee19?q=80&w=2076&auto=format&fit=crop',
    ),
    array(
        'name' => 'Vail',
        'location' => 'Colorado',
        'image' => 'https://images.unsplash.com/photo-1605540436563-5bca919ae766?q=80&w=2070&auto=format&fit=crop',
    ),
    array(
        'name' => 'The Hamptons',
        'location' => 'New York',
        'image' => get_template_directory_uri() . '/assets/images/destinations/hamptons.webp',
    ),
    array(
        'name' => 'Turks and Caicos',
        'location' => 'Caribbean',
        'image' => get_template_directory_uri() . '/assets/images/destinations/turks.jpg',
    ),
    array(
        'name' => 'Chicago',
        'location' => 'Illinois',
        'image' => 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?q=80&w=2088&auto=format&fit=crop',
    ),
    array(
        'name' => 'Nashville',
        'location' => 'Tennessee',
        'image' => get_template_directory_uri() . '/assets/images/destinations/nashville.avif',
    ),
);
?>

<section id="destinations" class="py-24 sm:py-32 bg-[#0a1628]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mx-auto max-w-3xl text-center mb-16">
            <p class="text-m font-light tracking-[0.3em] uppercase text-white/60 mb-4">
                Where We Fly
            </p>
            <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-white">
                Popular Destinations
            </h2>
            <p class="text-xl text-white/70 font-light leading-relaxed">
                Serving over 300 airports, including international destinations
            </p>
        </div>

        <!-- Destinations Grid -->
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($destinations as $index => $destination) : ?>
                    <div
                        class="destination-card group relative h-80 overflow-hidden translate-y-12 opacity-0"
                        style="transition: transform 0.7s ease-out, opacity 0.7s ease-out; transition-delay: <?php echo $index * 100; ?>ms;"
                    >
                        <!-- Image -->
                        <img
                            src="<?php echo esc_url($destination['image']); ?>"
                            alt="<?php echo esc_attr($destination['name']); ?>"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        />

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                        <!-- Text -->
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="font-serif text-3xl font-light mb-1"><?php echo esc_html($destination['name']); ?></h3>
                            <p class="text-sm font-light tracking-wider uppercase opacity-90"><?php echo esc_html($destination['location']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Get a Quote Button -->
        <div class="flex justify-center mt-20">
            <a href="#contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none h-12 px-10 text-lg bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#0a1628]">
                Get a Quote
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const destinationCards = document.querySelectorAll('.destination-card');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('translate-y-12', 'opacity-0');
                    entry.target.classList.add('translate-y-0', 'opacity-100');
                }
            });
        },
        { threshold: 0.2 }
    );

    destinationCards.forEach(card => {
        observer.observe(card);
    });
});
</script>
