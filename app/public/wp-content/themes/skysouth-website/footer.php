<footer class="border-t bg-[#0a1628] text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-12 mb-12">
            <!-- Company Info -->
            <div class="space-y-4 md:col-span-2">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/ss-logo-white-navy-left.png'); ?>"
                    alt="SkySouth"
                    class="h-12 w-auto mb-4"
                />
                <p class="text-sm font-light leading-relaxed text-white/70 max-w-md">
                    Curating extraordinary private charter experiences since 2003. Based at Burlington-Alamance Regional Airport in North Carolina.
                </p>
                <div class="pt-4">
                    <a href="tel:+13366392151" class="text-sm font-light text-white/90 hover:text-white transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        (336) 639-2151
                    </a>
                </div>
            </div>

            <!-- Fleet -->
            <div>
                <h4 class="font-light tracking-widest uppercase text-sm mb-4 text-white">Fleet</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="<?php echo esc_url(home_url('/citation-cj1')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Citation CJ1
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/citation-cj3')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Citation CJ3
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/#fleet')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Full Fleet
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="font-light tracking-widest uppercase text-sm mb-4 text-white">Services</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="<?php echo esc_url(home_url('/private-travel')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Private Travel
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/medical-services')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Medical Flights
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/fbo-services')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            FBO Services
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 class="font-light tracking-widest uppercase text-sm mb-4 text-white">Company</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="<?php echo esc_url(home_url('/team')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Our Team
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="text-sm font-light text-white/70 hover:text-white transition-colors">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-white/20 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm font-light text-white/60">
                &copy; <?php echo date('Y'); ?> SkySouth Aviation. All rights reserved.
            </p>
            <div class="flex gap-6">
                <a href="#privacy" class="text-sm font-light text-white/60 hover:text-white transition-colors">
                    Privacy Policy
                </a>
                <a href="#terms" class="text-sm font-light text-white/60 hover:text-white transition-colors">
                    Terms of Service
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>