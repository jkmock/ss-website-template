<!-- Contact Us Section -->
<section id="contact" class="py-24 sm:py-32 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16 translate-y-12 opacity-0 transition-all duration-1000 ease-out" data-animate>
                <p class="text-lg font-light tracking-[0.3em] uppercase text-gray-600 mb-4">
                    Get In Touch
                </p>
                <h2 class="font-serif text-4xl sm:text-5xl font-light mb-6 text-[#0a1628]">
                    Contact Us
                </h2>
                <p class="text-xl font-light leading-relaxed text-gray-700 max-w-4xl mx-auto">
                    <span class="lg:whitespace-nowrap">Send us a message for trip requests and general inquiries - we'll reply within one business day.</span><br><span class="font-bold block mt-4 lg:inline lg:mt-0">If you need immediate assistance, please call our 24/7 dispatch line.</span>
                </p>
            </div>

            <div class="flex flex-col lg:grid lg:grid-cols-2 lg:auto-rows-min gap-8 md:gap-12">
                <!-- 24/7 Charter Dispatch - Order 1 on mobile & tablet -->
                <div class="translate-y-12 opacity-0 transition-all duration-1000 ease-out order-1 lg:order-none lg:col-start-1" data-animate>
                    <div class="bg-[#0a1628] p-8 rounded-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/10">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-light uppercase tracking-wider text-white/70">24/7 Charter Dispatch</p>
                            </div>
                        </div>
                        <a href="tel:+13366392151" class="text-3xl font-serif font-light text-white hover:text-white/90 transition-colors block" style="font-variant-numeric: lining-nums;">
                            (336) 639-2151
                        </a>
                    </div>
                </div>

                <!-- Quote Request Form - Order 2 on mobile & tablet, appears after dispatch -->
                <div class="translate-y-12 opacity-0 transition-all duration-1000 ease-out order-2 lg:order-none lg:col-start-2 lg:row-start-1 lg:row-end-5" data-animate style="transition-delay: 150ms;">
                    <div class="bg-white p-8 rounded-lg border border-gray-200">
                        <h3 class="font-serif text-2xl font-light mb-4 text-[#0a1628]">Request a Quote</h3>
                        <form id="quote-form" class="space-y-4" novalidate>
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-light text-gray-700 mb-2">Name *</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    required
                                    class="w-full px-4 py-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0a1628] focus:border-transparent transition-all text-base"
                                    placeholder="Name"
                                />
                                <p class="error-message hidden mt-2 text-sm text-red-600 font-light"></p>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-light text-gray-700 mb-2">Email Address *</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    required
                                    class="w-full px-4 py-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0a1628] focus:border-transparent transition-all text-base"
                                    placeholder="name@example.com"
                                />
                                <p class="error-message hidden mt-2 text-sm text-red-600 font-light"></p>
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-light text-gray-700 mb-2">Phone Number *</label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    required
                                    class="w-full px-4 py-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0a1628] focus:border-transparent transition-all text-base"
                                    placeholder="(123) 456-7890"
                                />
                                <p class="error-message hidden mt-2 text-sm text-red-600 font-light"></p>
                            </div>

                            <!-- Date -->
                            <div class="relative">
                                <label for="travel-date" class="block text-sm font-light text-gray-700 mb-2">Travel Date</label>
                                <div class="relative">
                                    <input
                                        type="date"
                                        id="travel-date"
                                        name="travel-date"
                                        class="w-full px-4 py-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0a1628] focus:border-transparent transition-all text-base date-input"
                                        style="max-width: 100%;"
                                    />
                                    <span id="date-placeholder" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-base">MM/DD/YYYY</span>
                                </div>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-light text-gray-700 mb-2">Additional Details</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="11"
                                    class="w-full px-4 py-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0a1628] focus:border-transparent transition-all resize-none text-base"
                                    placeholder="Number of Passengers, Departure and Arrival Location, One Way or Round Trip, Special Requests, etc."
                                ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                class="w-full inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all outline-none bg-[#0a1628] text-white hover:bg-[#0a1628]/90 px-8 h-14 text-base"
                            >
                                Submit Request
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Other Contact Numbers - Order 3 on mobile & tablet -->
                <div class="translate-y-12 opacity-0 transition-all duration-1000 ease-out order-3 lg:order-none lg:col-start-1" data-animate>
                    <div class="bg-white p-8 rounded-lg border border-gray-200">
                        <h3 class="font-serif text-2xl font-light mb-6 text-[#0a1628]">Other Numbers</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-sm font-light uppercase tracking-wider text-gray-600 mb-1">FBO Front Desk</p>
                                <a href="tel:+13362263330" class="text-lg font-light text-[#0a1628] hover:text-[#0a1628]/80 transition-colors" style="font-variant-numeric: lining-nums;">
                                    (336) 226-3330
                                </a>
                            </div>
                            <div class="pt-4 border-t border-gray-200">
                                <p class="text-sm font-light uppercase tracking-wider text-gray-600 mb-1">On-Duty Fuel Cell Phone</p>
                                <a href="tel:+13369374188" class="text-lg font-light text-[#0a1628] hover:text-[#0a1628]/80 transition-colors" style="font-variant-numeric: lining-nums;">
                                    (336) 937-4188
                                </a>
                            </div>
                            <div class="pt-4 border-t border-gray-200">
                                <p class="text-sm font-light uppercase tracking-wider text-gray-600 mb-1">After Hours Fuel Service</p>
                                <a href="tel:+13362234994" class="text-lg font-light text-[#0a1628] hover:text-[#0a1628]/80 transition-colors" style="font-variant-numeric: lining-nums;">
                                    (336) 223-4994
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Address & Hours - Order 4 on mobile & tablet -->
                <!-- Mobile: Hours in 2 columns, Address full width below -->
                <!-- Tablet+: Address left, Hours right -->
                <div class="translate-y-12 opacity-0 transition-all duration-1000 ease-out order-4 lg:order-none lg:col-start-1" data-animate>
                    <div class="space-y-8 md:space-y-4">
                        <!-- Hours - Mobile only, combined in one block -->
                        <div class="bg-white p-8 rounded-lg border border-gray-200 md:hidden">
                            <h3 class="font-serif text-2xl font-light mb-5 text-[#0a1628]">Charter Hours</h3>
                            <div class="text-lg font-light text-[#0a1628] space-y-1.5 mb-5">
                                <p>Every Day: 24/7</p>
                            </div>
                            <h3 class="font-serif text-2xl font-light mb-5 text-[#0a1628]">FBO Hours</h3>
                            <div class="text-lg font-light text-[#0a1628] space-y-1.5">
                                <p>Weekdays: 7am - 7pm</p>
                                <p>Weekends: 8am - 6pm</p>
                                <p class="text-sm pt-2 text-gray-600">Please call for holiday hours. After hours FBO service available by request.</p>
                            </div>
                        </div>

                        <!-- Address - Full width on mobile -->
                        <div class="bg-white p-8 rounded-lg border border-gray-200 md:hidden">
                            <h3 class="font-serif text-2xl font-light mb-5 text-[#0a1628]">Address</h3>
                            <div class="text-lg font-light text-[#0a1628] space-y-1.5">
                                <p>3441 North Aviation Dr</p>
                                <p>Burlington, NC 27215</p>
                                <p>United States</p>
                            </div>
                        </div>

                        <!-- Tablet+ Layout - Original 2 column -->
                        <div class="hidden md:grid md:grid-cols-2 gap-4 items-start">
                            <!-- Address Box -->
                            <div class="bg-white p-8 rounded-lg border border-gray-200">
                                <h3 class="font-serif text-2xl font-light mb-5 text-[#0a1628]">Address</h3>
                                <div class="text-lg font-light text-[#0a1628] space-y-1.5">
                                    <p>3441 North Aviation Dr</p>
                                    <p>Burlington, NC 27215</p>
                                    <p>United States</p>
                                </div>
                            </div>

                            <!-- Hours Box -->
                            <div class="bg-white p-8 rounded-lg border border-gray-200">
                                <h3 class="font-serif text-2xl font-light mb-5 text-[#0a1628]">Charter Hours</h3>
                                <div class="text-lg font-light text-[#0a1628] space-y-1.5 mb-5">
                                    <p>Every Day: 24/7</p>
                                </div>
                                <h3 class="font-serif text-2xl font-light mb-5 text-[#0a1628]">FBO Hours</h3>
                                <div class="text-lg font-light text-[#0a1628] space-y-1.5">
                                    <p>Weekdays: 7am - 7pm</p>
                                    <p>Weekends: 8am - 6pm</p>
                                    <p class="text-sm pt-2 text-gray-600">Please call for holiday hours. After hours service available by request.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Hide date input text when empty to prevent overlap with custom placeholder */
input[type="date"].date-input:not(:focus):invalid,
input[type="date"].date-input:not(:focus):not([value]) {
    color: transparent;
}

input[type="date"].date-input:focus,
input[type="date"].date-input:valid {
    color: inherit;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('travel-date');
    const datePlaceholder = document.getElementById('date-placeholder');

    if (dateInput && datePlaceholder) {
        function updatePlaceholder() {
            // Hide placeholder if input has value or is focused
            if (dateInput.value) {
                datePlaceholder.style.display = 'none';
                dateInput.style.color = '#111827'; // Dark gray for date text
            } else if (document.activeElement === dateInput) {
                datePlaceholder.style.display = 'none';
                dateInput.style.color = '#111827';
            } else {
                datePlaceholder.style.display = 'block';
                dateInput.style.color = 'transparent';
            }
        }

        // Initialize
        updatePlaceholder();

        // Update on various events
        dateInput.addEventListener('input', updatePlaceholder);
        dateInput.addEventListener('change', updatePlaceholder);
        dateInput.addEventListener('focus', updatePlaceholder);
        dateInput.addEventListener('blur', function() {
            // Small delay to allow native picker to update value
            setTimeout(updatePlaceholder, 100);
        });
    }
});
</script>
