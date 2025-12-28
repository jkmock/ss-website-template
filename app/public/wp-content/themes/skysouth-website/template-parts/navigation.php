<?php
/**
 * Template part for displaying the navigation
 *
 * @package SkySouth_Website
 */
?>

<nav id="main-navigation" class="fixed top-0 left-0 right-0 z-50 border-b transition-colors duration-300 bg-transparent border-transparent">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block">
                    <img
                        id="nav-logo"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/logos/ss-logo-white-navy-left.png'); ?>"
                        alt="<?php bloginfo('name'); ?>"
                        width="180"
                        height="60"
                        class="h-12 w-auto transition-opacity duration-300"
                    />
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8 ml-auto">
                <a
                    href="<?php echo esc_url(home_url('/')); ?>"
                    class="nav-link text-base font-light tracking-widest uppercase transition-colors text-white hover:text-white/80"
                >
                    Home
                </a>
                <!-- Fleet Dropdown -->
                <div class="relative fleet-dropdown">
                    <button
                        class="nav-link text-base font-light tracking-widest uppercase transition-colors text-white hover:text-white/80"
                    >
                        Fleet
                    </button>
                    <div class="fleet-dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white shadow-xl border border-border overflow-hidden opacity-0 invisible transition-all duration-200">
                        <a href="<?php echo esc_url(home_url('/citation-cj1')); ?>" class="block px-6 py-4 text-base font-light text-foreground hover:bg-gray-50 transition-colors border-b border-border">
                            Citation CJ1
                        </a>
                        <a href="<?php echo esc_url(home_url('/citation-cj3')); ?>" class="block px-6 py-4 text-base font-light text-foreground hover:bg-gray-50 transition-colors border-b border-border last:border-b-0">
                            Citation CJ3
                        </a>
                        <a href="<?php echo esc_url(home_url('/#fleet')); ?>" class="block px-6 py-4 text-base font-light text-foreground hover:bg-gray-50 transition-colors border-b border-border">
                            Full Fleet
                        </a>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="relative services-dropdown">
                    <button
                        class="nav-link text-base font-light tracking-widest uppercase transition-colors text-white hover:text-white/80"
                    >
                        Services
                    </button>
                    <div class="services-dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white shadow-xl border border-border overflow-hidden opacity-0 invisible transition-all duration-200">
                        <a href="<?php echo esc_url(home_url('/private-travel')); ?>" class="block px-6 py-4 text-base font-light text-foreground hover:bg-gray-50 transition-colors border-b border-border last:border-b-0">
                            Private Travel
                        </a>
                        <a href="<?php echo esc_url(home_url('/medical-services')); ?>" class="block px-6 py-4 text-base font-light text-foreground hover:bg-gray-50 transition-colors border-b border-border last:border-b-0">
                            Medical Flights
                        </a>
                        <a href="<?php echo esc_url(home_url('/fbo-services')); ?>" class="block px-6 py-4 text-base font-light text-foreground hover:bg-gray-50 transition-colors border-b border-border last:border-b-0">
                            FBO Services
                        </a>
                    </div>
                </div>

                <a
                    href="<?php echo esc_url(home_url('/team')); ?>"
                    class="nav-link text-base font-light tracking-widest uppercase transition-colors text-white hover:text-white/80"
                >
                    Team
                </a>
                <a
                    href="<?php echo esc_url(home_url('/blog')); ?>"
                    class="nav-link text-base font-light tracking-widest uppercase transition-colors text-white hover:text-white/80"
                >
                    Blog
                </a>
                <a
                    href="<?php echo esc_url(home_url('/#contact')); ?>"
                    class="nav-link text-base font-light tracking-widest uppercase transition-colors text-white hover:text-white/80"
                >
                    Contact
                </a>
                <a
                    href="tel:+13362267490"
                    class="nav-link flex items-center gap-2 text-base font-light transition-colors text-white hover:text-white/80"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    (336) 639-2151
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button
                    id="mobile-menu-button"
                    type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md transition-colors text-white hover:text-white/80"
                    aria-expanded="false"
                    aria-label="Open menu"
                >
                    <!-- Menu Icon -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-border">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a
                href="<?php echo esc_url(home_url('/')); ?>"
                class="block px-3 py-2 text-base font-light tracking-widest uppercase text-foreground hover:bg-accent rounded-md transition-colors"
            >
                Home
            </a>
            <a
                href="<?php echo esc_url(home_url('/#fleet')); ?>"
                class="block px-3 py-2 text-base font-light tracking-widest uppercase text-foreground hover:bg-accent rounded-md transition-colors"
            >
                Fleet
            </a>

            <!-- Services Submenu -->
            <div class="mobile-services-submenu">
                <button class="w-full flex items-center justify-between px-3 py-2 text-base font-light tracking-widest uppercase text-foreground hover:bg-accent rounded-md transition-colors">
                    Services
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="mobile-services-items hidden pl-6 space-y-1 mt-1">
                    <a href="<?php echo esc_url(home_url('/private-travel')); ?>" class="block px-3 py-2 text-sm text-foreground hover:bg-accent rounded-md transition-colors">
                        Private Travel
                    </a>
                    <a href="<?php echo esc_url(home_url('/medical-services')); ?>" class="block px-3 py-2 text-sm text-foreground hover:bg-accent rounded-md transition-colors">
                        Medical Flights
                    </a>
                    <a href="<?php echo esc_url(home_url('/fbo-services')); ?>" class="block px-3 py-2 text-sm text-foreground hover:bg-accent rounded-md transition-colors">
                        FBO Services
                    </a>
                </div>
            </div>

            <a
                href="<?php echo esc_url(home_url('/team')); ?>"
                class="block px-3 py-2 text-base font-light tracking-widest uppercase text-foreground hover:bg-accent rounded-md transition-colors"
            >
                Team
            </a>
            <a
                href="<?php echo esc_url(home_url('/blog')); ?>"
                class="block px-3 py-2 text-base font-light tracking-widest uppercase text-foreground hover:bg-accent rounded-md transition-colors"
            >
                Blog
            </a>
            <a
                href="<?php echo esc_url(home_url('/#contact')); ?>"
                class="block px-3 py-2 text-base font-light tracking-widest uppercase text-foreground hover:bg-accent rounded-md transition-colors"
            >
                Contact
            </a>
            <a
                href="tel:+13362267490"
                class="flex items-center gap-2 px-3 py-2 text-base font-light text-foreground hover:bg-accent rounded-md transition-colors"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                (336) 226-7490
            </a>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const nav = document.getElementById('main-navigation');
    const navLogo = document.getElementById('nav-logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    const logoWhite = '<?php echo esc_url(get_template_directory_uri() . '/assets/logos/ss-logo-white-navy-left.png'); ?>';
    const logoGray = '<?php echo esc_url(get_template_directory_uri() . '/assets/logos/ss-logo-gray-navy-left.png'); ?>';

    // Handle scroll behavior
    function handleScroll() {
        const scrolled = window.scrollY > 50;

        if (scrolled) {
            // Scrolled state - white background
            nav.classList.remove('bg-transparent', 'border-transparent');
            nav.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'border-border');
            navLogo.src = logoGray;

            // Update desktop nav links
            navLinks.forEach(link => {
                link.classList.remove('text-white', 'hover:text-white/80');
                link.classList.add('text-foreground', 'hover:text-foreground/70');
            });

            // Update mobile menu button
            mobileMenuButton.classList.remove('text-white', 'hover:text-white/80');
            mobileMenuButton.classList.add('text-foreground');
        } else {
            // Top of page - transparent background
            nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'border-border');
            nav.classList.add('bg-transparent', 'border-transparent');
            navLogo.src = logoWhite;

            // Update desktop nav links
            navLinks.forEach(link => {
                link.classList.remove('text-foreground', 'hover:text-foreground/70');
                link.classList.add('text-white', 'hover:text-white/80');
            });

            // Update mobile menu button
            mobileMenuButton.classList.remove('text-foreground');
            mobileMenuButton.classList.add('text-white', 'hover:text-white/80');
        }
    }

    // Mobile menu toggle
    mobileMenuButton.addEventListener('click', function() {
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking on a link
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        });
    });

    // Fleet dropdown functionality (desktop)
    const fleetDropdown = document.querySelector('.fleet-dropdown');
    const fleetDropdownMenu = document.querySelector('.fleet-dropdown-menu');

    if (fleetDropdown && fleetDropdownMenu) {
        fleetDropdown.addEventListener('mouseenter', function() {
            fleetDropdownMenu.classList.remove('opacity-0', 'invisible');
            fleetDropdownMenu.classList.add('opacity-100', 'visible');
        });

        fleetDropdown.addEventListener('mouseleave', function() {
            fleetDropdownMenu.classList.remove('opacity-100', 'visible');
            fleetDropdownMenu.classList.add('opacity-0', 'invisible');
        });
    }

    // Services dropdown functionality (desktop)
    const servicesDropdown = document.querySelector('.services-dropdown');
    const servicesDropdownMenu = document.querySelector('.services-dropdown-menu');

    if (servicesDropdown && servicesDropdownMenu) {
        servicesDropdown.addEventListener('mouseenter', function() {
            servicesDropdownMenu.classList.remove('opacity-0', 'invisible');
            servicesDropdownMenu.classList.add('opacity-100', 'visible');
        });

        servicesDropdown.addEventListener('mouseleave', function() {
            servicesDropdownMenu.classList.remove('opacity-100', 'visible');
            servicesDropdownMenu.classList.add('opacity-0', 'invisible');
        });
    }

    // Mobile services submenu toggle
    const mobileServicesSubmenu = document.querySelector('.mobile-services-submenu button');
    const mobileServicesItems = document.querySelector('.mobile-services-items');

    if (mobileServicesSubmenu && mobileServicesItems) {
        mobileServicesSubmenu.addEventListener('click', function() {
            mobileServicesItems.classList.toggle('hidden');
        });
    }

    // Listen for scroll events
    window.addEventListener('scroll', handleScroll);

    // Call once on load
    handleScroll();
});
</script>
