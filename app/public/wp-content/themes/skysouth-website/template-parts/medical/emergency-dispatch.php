<?php
/**
 * Template part for emergency dispatch section
 *
 * @package SkySouth_Website
 */
?>

<!-- Emergency Dispatch Section -->
<section class="medical-section emergency-dispatch py-32 bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div class="medical-content emergency-dispatch-content translate-y-12 opacity-0 transition-all duration-700 px-8 sm:px-12 lg:px-0">
                    <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-foreground">
                        24/7 Emergency Dispatch
                    </h2>
                    <div class="space-y-4 text-xl lg:text-lg text-foreground/70 font-light leading-relaxed mb-8">
                        <p>
                            We understand the urgency of medical transport. Our dispatch team is available around the clock, ready to coordinate your critical medical flight at a moment's notice.
                        </p>
                    </div>
                </div>

                <!-- Icon -->
                <div class="hidden lg:flex medical-image items-center justify-center translate-y-12 opacity-0 transition-all duration-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="280" height="280" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-foreground">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (min-width: 1280px) and (max-width: 1439px) {
    .emergency-dispatch-content {
        padding-left: 3rem;
    }
}
</style>
