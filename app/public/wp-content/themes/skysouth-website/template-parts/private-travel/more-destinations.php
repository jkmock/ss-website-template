<?php
/**
 * Template part for private travel more destinations section
 *
 * @package SkySouth_Website
 */
?>

<!-- Access & Convenience Section -->
<section class="private-travel-section access py-32 bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Icon -->
                <div class="hidden lg:flex private-travel-image items-center justify-center order-2 lg:order-1 translate-y-12 opacity-0 transition-all duration-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="320" height="320" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="text-foreground">
                        <path d="M18 8c0 4.5-6 9-6 9s-6-4.5-6-9a6 6 0 0 1 12 0"/>
                        <circle cx="12" cy="8" r="2"/>
                        <path d="M8.835 14H5a1 1 0 0 0-.9.7l-2 6c-.1.1-.1.2-.1.3 0 .6.4 1 1 1h18c.6 0 1-.4 1-1 0-.1 0-.2-.1-.3l-2-6a1 1 0 0 0-.9-.7h-3.835"/>
                    </svg>
                </div>

                <!-- Content -->
                <div class="private-travel-content destinations-content order-1 lg:order-2 translate-y-12 opacity-0 transition-all duration-700">
                    <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-foreground">
                        Access More Destinations
                    </h2>
                    <div class="space-y-6 text-lg text-foreground/70 font-light leading-relaxed">
                        <p>
                            <span class="font-medium text-foreground">Thousands of airports at your disposal.</span> While commercial airlines serve fewer than 500 airports in the United States, private aviation opens access to thousands of airports nationwide. Get closer to your actual destination and eliminate hours of ground transportation.
                        </p>
                        <p>
                            <span class="font-medium text-foreground">Regional access redefined.</span> Need to reach a manufacturing facility in a rural area? Attend a meeting at a corporate campus outside major cities? Visit family at their lakeside retreat? Private charter gets you there directly, often landing at airports just minutes from your final destination.
                        </p>
                        <p>
                            <span class="font-medium text-foreground">Weather alternatives.</span> When commercial flights are grounded or delayed, we have options. Our pilots can route to alternate airports, depart before weather systems arrive, or let you wait out delays in the comfort of a private terminal.
                        </p>
                        <p>
                            <span class="font-medium text-foreground">Multi-city efficiency.</span> A typical business day might include Charlotte at 8am, Atlanta at noon, and Nashville by 3pm—impossible on commercial airlines, routine with private charter. Our clients can visit multiple cities in a single day.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (min-width: 1280px) and (max-width: 1439px) {
    .destinations-content {
        padding-left: 3rem;
        padding-right: 3rem;
    }
}
</style>
