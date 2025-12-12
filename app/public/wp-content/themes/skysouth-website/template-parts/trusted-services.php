<?php
/**
 * Template part for displaying the Trusted Services section
 *
 * @package SkySouth_Website
 */
?>

<section id="trusted-services" class="pt-24 sm:pt-32 pb-12 sm:pb-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mx-auto max-w-3xl text-center mb-16">
            <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6">
                Trusted Private Jet Charter and FBO Services
                Since 2003
            </h2>
        </div>

        <!-- Content Grid -->
        <div class="trusted-services-content mx-auto max-w-7xl grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
            <!-- Image -->
            <div class="lg:col-span-2 relative h-[300px] overflow-hidden shadow-xl trusted-image -translate-x-12 opacity-0">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team/team-members.webp'); ?>"
                    alt="SkySouth team members"
                    class="h-full w-full object-cover"
                />
            </div>

            <!-- Text Content -->
            <div class="lg:col-span-3 space-y-8 trusted-text translate-x-12 opacity-0">
                <p class="text-xl text-foreground font-light leading-relaxed">
                    Founded by Kevin Mock, SkySouth began with a single Baron aircraft and has grown into a full-service FBO and private jet charter operator based in Burlington, NC. Our team brings thousands of flight hours and a passion for delivering seamless, safe, and personalized aviation services to clients across the Piedmont Triad and beyond.
                </p>
                <div class="flex justify-center">
                    <a href="#contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-primary text-primary-foreground hover:bg-primary/90 h-12 px-8">
                        Meet the Team
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const section = document.querySelector('.trusted-services-content');
    const image = document.querySelector('.trusted-image');
    const text = document.querySelector('.trusted-text');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    image.classList.remove('-translate-x-12', 'opacity-0');
                    image.classList.add('translate-x-0', 'opacity-100');

                    setTimeout(() => {
                        text.classList.remove('translate-x-12', 'opacity-0');
                        text.classList.add('translate-x-0', 'opacity-100');
                    }, 200);
                }
            });
        },
        { threshold: 0.1 }
    );

    if (section) {
        observer.observe(section);
    }
});
</script>

<style>
.trusted-image,
.trusted-text {
    transition: transform 0.7s ease-out, opacity 0.7s ease-out;
}
</style>
