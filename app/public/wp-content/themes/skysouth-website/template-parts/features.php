<?php
/**
 * Template part for displaying the features section
 *
 * Experience rapid boarding and takeoff with minimal wait times, getting you to your destination quickly
 * @package SkySouth_Website
 */

$features = array(
    array(
        'icon' => 'plane-takeoff',
        'title' => 'Fast Departures',
        'description' => 'No waiting.  We depart when you are ready.',
    ),
    array(
        'icon' => 'calendar-clock',
        'title' => 'Flexible Schedules',
        'description' => 'Fly on your schedule, not ours. Customize departure and arrival times to fit your needs perfectly.',
    ),
    array(
        'icon' => 'clipboard-check',
        'title' => 'Seamless Planning',
        'description' => 'Our expert team handles every detail from flight planning to ground transportation for a stress-free experience.',
    ),
    array(
        'icon' => 'building',
        'title' => 'FBO Services',
        'description' => 'Access premium Fixed-Base Operator facilities with luxury lounges, catering, and concierge services.',
    ),
);

// SVG Icons
$icons = array(
    'plane-takeoff' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plane-takeoff-icon lucide-plane-takeoff"><path d="M2 22h20"/><path d="M6.36 17.4 4 17l-2-4 1.1-.55a2 2 0 0 1 1.8 0l.17.1a2 2 0 0 0 1.8 0L8 12 5 6l.9-.45a2 2 0 0 1 2.09.2l4.02 3a2 2 0 0 0 2.1.2l4.19-2.06a2.41 2.41 0 0 1 1.73-.17L21 7a1.4 1.4 0 0 1 .87 1.99l-.38.76c-.23.46-.6.84-1.07 1.08L7.58 17.2a2 2 0 0 1-1.22.18Z"/></svg>',
    'calendar-clock' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h5"/><path d="M17.5 17.5 16 16.3V14"/><circle cx="16" cy="16" r="6"/></svg>',
    'clipboard-check' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="m9 14 2 2 4-4"/></svg>',
    'building' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>',
);
?>

<section id="experiences" class="py-24 sm:py-32 bg-gradient-to-b from-gray-50 via-gray-100 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mx-auto max-w-3xl text-center mb-20">
            <p class="text-lg font-light tracking-[0.3em] uppercase text-[#0a1628]/60 mb-4">
                The Ultimate Experience
            </p>
            <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-[#0a1628]">
                Why Choose SkySouth
            </h2>
            <p class="text-xl text-[#0a1628]/70 font-light leading-relaxed">
                Over two decades flying private charter aircraft
            </p>
        </div>

        <!-- Feature Cards Grid -->
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 xl:grid-cols-4 auto-rows-fr">
                <?php foreach ($features as $index => $feature) : ?>
                    <div
                        class="feature-card relative overflow-hidden bg-[#0a1628] border border-white/10 shadow-xl hover:shadow-2xl hover:-translate-y-2 hover:border-white/20 min-h-[340px] rounded-lg translate-y-8 opacity-0"
                        style="transition: transform 0.15s ease-out, box-shadow 0.15s ease-out, border-color 0.15s ease-out, opacity 0.7s ease-out, translate 0.7s ease-out; transition-delay: 0s, 0s, 0s, <?php echo $index * 100; ?>ms, <?php echo $index * 100; ?>ms;"
                    >
                        <!-- Subtle gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none"></div>

                        <!-- Card Content -->
                        <div class="relative text-center pb-6 h-full flex flex-col justify-start items-center px-6 pt-8">
                            <!-- Icon Circle -->
                            <div class="flex h-24 w-24 items-center justify-center rounded-full bg-white/10 backdrop-blur-sm mb-8 ring-1 ring-white/20">
                                <div class="text-white h-auto w-auto">
                                    <?php echo $icons[$feature['icon']]; ?>
                                </div>
                            </div>

                            <!-- Title -->
                            <h3 class="font-serif text-3xl font-normal mb-4 text-center text-white whitespace-nowrap">
                                <?php echo esc_html($feature['title']); ?>
                            </h3>

                            <!-- Description -->
                            <p class="text-base leading-relaxed text-center text-white/80 max-w-sm">
                                <?php echo esc_html($feature['description']); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for feature cards animation
    const featureCards = document.querySelectorAll('.feature-card');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('translate-y-8', 'opacity-0');
                    entry.target.classList.add('translate-y-0', 'opacity-100');
                }
            });
        },
        { threshold: 0.2 }
    );

    featureCards.forEach(card => {
        observer.observe(card);
    });
});
</script>

<style>
@media (min-width: 1024px) and (max-width: 1279px) {
    #experiences .grid {
        max-width: 48rem;
        margin-left: auto;
        margin-right: auto;
    }
}
</style>
