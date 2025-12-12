<?php
/**
 * Template part for displaying the FBO Services section
 *
 * @package SkySouth_Website
 */

$services = array(
    array(
        'icon' => 'map-pin',
        'title' => 'Convenient Location',
        'description' => 'Our location in Burlington puts Elon University, Chapel Hill, Durham, and Raleigh within driving distance.',
    ),
    array(
        'icon' => 'plane',
        'title' => 'Support For Every Aircraft',
        'description' => 'The 6,400-ft runway at Burlington (KBUY), combined with our comprehensive refueling and lavatory services, enables us to accommodate large-cabin business jets with ease.',
    ),array(
        'icon' => 'amenities',
        'title' => 'Our Amenities',
        'description' => 'Pilots enjoy our comfortable lounge, refreshments, and WIFI.',
    ),
);

// SVG Icons - Large versions
$icons = array(
    'map-pin' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>',
    'plane' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plane-icon lucide-plane"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>',
    'amenities' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-armchair-icon lucide-armchair"><path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"/><path d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z"/><path d="M5 18v2"/><path d="M19 18v2"/></svg>'
);
?>

<section id="fbo-services" class="py-24 sm:py-32 bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-16 text-center">
            <p class="text-m font-light tracking-[0.3em] uppercase text-foreground/60 mb-4">
                Premium Facilities
            </p>
            <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-foreground">
                First Class FBO Services
            </h2>
        </div>

        <!-- Image Section -->
        <div class="max-w-7xl mx-auto mb-16">
            <div class="flex justify-center">
                <div class="relative h-[400px] lg:h-[500px] w-full max-w-5xl">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Other/large-jet.JPG"
                        alt="Private Jet at FBO Facility"
                        class="w-full h-full object-cover shadow-lg"
                    />
                </div>
            </div>
        </div>

        <!-- Services Grid - Horizontal -->
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <?php foreach ($services as $service) : ?>
                    <div class="flex flex-col items-center text-center space-y-4">
                        <!-- Large Icon -->
                        <div class="text-primary mb-2">
                            <?php echo $icons[$service['icon']]; ?>
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif text-3xl font-light text-foreground">
                            <?php echo esc_html($service['title']); ?>
                        </h3>

                        <!-- Description -->
                        <p class="text-lg text-foreground/70 font-light leading-relaxed">
                            <?php echo esc_html($service['description']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CTA Buttons Section -->
        <div class="max-w-7xl mx-auto mt-16">
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-primary text-primary-foreground hover:bg-primary/90 h-12 px-8">
                    Learn More
                </a>
                <a href="#fbo-hours" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none border-2 border-primary bg-transparent text-primary hover:bg-primary hover:text-primary-foreground h-12 px-8">
                    FBO Hours
                </a>
            </div>
        </div>
    </div>
</section>
