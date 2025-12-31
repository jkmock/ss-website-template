<?php
/**
 * Template part for displaying the Experience section
 *
 * @package SkySouth_Website
 */
?>

<section id="experience" class="py-24 sm:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mx-auto max-w-3xl text-center mb-8">
            <p class="hidden md:block text-lg font-light tracking-[0.3em] uppercase text-muted-foreground mb-4">
                Decades of Experience
            </p>
            <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6">
                Two Decades of SkySouth Flights
            </h2>
            <p class="text-xl text-muted-foreground font-light leading-relaxed">
                Explore our map of thousands of flights to hundreds of airports
            </p>
        </div>

        <!-- Iframe Container -->
        <div class="mx-auto w-full md:w-[90%] lg:w-[80%]">
            <div class="relative w-full map-aspect-ratio">
                <iframe
                    src="https://skysouthmap.vercel.app/embed"
                    class="absolute top-0 left-0 w-full h-full shadow-2xl"
                    title="SkySouth Experience Map"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </div>
</section>

<style>
.map-aspect-ratio {
    padding-bottom: 120%;
}

@media (min-width: 768px) {
    .map-aspect-ratio {
        padding-bottom: 70%;
    }
}

@media (min-width: 1024px) {
    .map-aspect-ratio {
        padding-bottom: 60%;
    }
}
</style>
