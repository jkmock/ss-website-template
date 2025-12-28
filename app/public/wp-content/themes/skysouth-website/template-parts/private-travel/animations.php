<?php
/**
 * Template part for private travel sections scroll animations
 *
 * @package SkySouth_Website
 */
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animation observer for private travel content elements
    const privateTravelContent = document.querySelectorAll('.private-travel-content');
    const privateTravelImages = document.querySelectorAll('.private-travel-image');

    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px'
    };

    const contentObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('translate-y-12', 'opacity-0');
                entry.target.classList.add('translate-y-0', 'opacity-100');
            }
        });
    }, observerOptions);

    // Observe content elements
    privateTravelContent.forEach(content => {
        contentObserver.observe(content);
    });

    // Observe image elements
    privateTravelImages.forEach(image => {
        contentObserver.observe(image);
    });
});
</script>
