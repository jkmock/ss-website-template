<?php
/**
 * Template part for displaying the medical flights section
 *
 * @package SkySouth_Website
 */
?>

<section id="medical" class="py-24 sm:py-32 bg-[#0a1628]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left: Content -->
                <div class="text-white translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                    <p class="text-m font-light tracking-[0.3em] uppercase text-white/60 mb-4">
                        Medical Flights
                    </p>
                    <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 whitespace-nowrap">
                        Trusted by Medical Professionals
                    </h2>
                    <p class="text-xl font-light leading-relaxed text-white/80 mb-8">
                        Doctors and hospitals across the country rely on our proven safety record and unwavering reliability for critical medical transport. Our pilots are trusted to fly with time-sensitive organs, samples, and organ transplant teams onboard.
                    </p>

                    <!-- Key Points -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                        <!-- Proven Safety Record -->
                        <div class="bg-white/5 p-6 rounded-lg border border-white/10 text-center">
                            <div class="flex justify-center mb-4">
                                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                                        <path d="m9 12 2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-serif text-2xl font-light">Proven Safety Record</h3>
                        </div>

                        <!-- Efficient and reliable -->
                        <div class="bg-white/5 p-6 rounded-lg border border-white/10 text-center">
                            <div class="flex justify-center mb-4">
                                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-gauge-icon lucide-circle-gauge"><path d="M15.6 2.7a10 10 0 1 0 5.7 5.7"/><circle cx="12" cy="12" r="2"/><path d="M13.4 10.6 19 5"/></svg>
                                </div>
                            </div>
                            <h3 class="font-serif text-2xl font-light">Efficient and Reliable</h3>
                        </div>

                        <!-- Experienced Crew -->
                        <div class="bg-white/5 p-6 rounded-lg border border-white/10 text-center">
                            <div class="flex justify-center mb-4">
                                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-serif text-2xl font-light">Experienced Crew</h3>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="flex justify-center">
                        <a
                            href="<?php echo esc_url(home_url('/medical-services')); ?>"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all outline-none border-2 border-white text-white bg-transparent hover:bg-white hover:text-[#0a1628] h-12 px-8 text-base"
                        >
                            Learn about medical flights
                        </a>
                    </div>
                </div>

                <!-- Right: Large Icon -->
                <div class="flex items-center justify-center lg:justify-end translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate style="transition-delay: 150ms;">
                    <div class="relative">
                        <!-- Glow effect -->
                        <div class="absolute inset-0 bg-white/5 rounded-full blur-3xl"></div>
                        <!-- Icon -->
                        <div class="relative text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="320" height="320" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse-icon lucide-heart-pulse"><path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"/><path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
