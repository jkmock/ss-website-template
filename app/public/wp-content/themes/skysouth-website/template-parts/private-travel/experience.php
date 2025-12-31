<?php
/**
 * Template part for private travel experience section
 *
 * @package SkySouth_Website
 */
?>

<!-- Comfort & Privacy Section -->
<section class="private-travel-section comfort py-32 bg-[#0a1628]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="private-travel-content experience-content translate-y-12 opacity-0 transition-all duration-700">
                    <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-white">
                        Privacy, Comfort & Control
                    </h2>
                    <div class="space-y-6 text-lg text-white/70 font-light leading-relaxed mb-12">
                        <p>
                            <span class="font-medium text-white">Your private cabin.</span> No strangers in the next seat. No overhead bin struggles. No fighting for armrests. The entire aircraft is yours. Configure seating as you prefer, bring oversized items that wouldn't fit on commercial flights, and enjoy genuine comfort.
                        </p>
                        <p>
                            <span class="font-medium text-white">Confidential discussions.</span> Executives close deals, attorneys discuss cases, and families make important decisions in complete privacy. Your conversations stay confidential, your documents stay secure, and your plans stay private.
                        </p>
                        <p>
                            <span class="font-medium text-white">Travel with your team.</span> Bring colleagues, clients, or family members. Brief your team before arrival, conduct strategy sessions in flight, or simply spend quality time with loved ones. Flying private means flying together on your terms.
                        </p>
                        <p>
                            <span class="font-medium text-white">Personalized service.</span> Need ground transportation arranged? Have special requests? We handle the details so you can focus on what matters. Our team coordinates every aspect of your journey from departure to arrival.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4">
                        <a
                            href="#contact"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#0a1628] h-12 px-8"
                        >
                            Request a Quote
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Icon -->
                <div class="hidden lg:flex private-travel-image items-center justify-center translate-y-12 opacity-0 transition-all duration-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="320" height="320" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (min-width: 1280px) and (max-width: 1439px) {
    .experience-content {
        padding-left: 3rem;
        padding-right: 3rem;
    }
}
</style>
