<footer class="border-t bg-slate-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Company Info -->
            <div class="space-y-4 md:col-span-2">
                <h3 class="font-serif text-2xl font-bold tracking-wider">SkySouth</h3>
                <p class="text-sm font-light leading-relaxed text-gray-300 max-w-md">
                    Curating extraordinary private charter experiences across the world's most captivating destinations since 2003.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-light tracking-widest uppercase text-sm mb-4">Explore</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="#fleet" class="text-sm font-light text-gray-300 hover:text-white transition-colors">
                            Our Fleet
                        </a>
                    </li>
                    <li>
                        <a href="#destinations" class="text-sm font-light text-gray-300 hover:text-white transition-colors">
                            Destinations
                        </a>
                    </li>
                    <li>
                        <a href="#experiences" class="text-sm font-light text-gray-300 hover:text-white transition-colors">
                            Experiences
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-sm font-light text-gray-300 hover:text-white transition-colors">
                            About Us
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-light tracking-widest uppercase text-sm mb-4">Contact</h4>
                <ul class="space-y-3">
                    <li class="text-sm font-light text-gray-300">
                        info@skysouth.com
                    </li>
                    <li class="text-sm font-light text-gray-300">
                        +1 (555) 123-4567
                    </li>
                    <li class="text-sm font-light text-gray-300">
                        Burlington, NC
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm font-light text-gray-400">
                &copy; <?php echo date('Y'); ?> SkySouth. All rights reserved.
            </p>
            <div class="flex gap-6">
                <a href="#privacy" class="text-sm font-light text-gray-400 hover:text-white transition-colors">
                    Privacy Policy
                </a>
                <a href="#terms" class="text-sm font-light text-gray-400 hover:text-white transition-colors">
                    Terms of Service
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>