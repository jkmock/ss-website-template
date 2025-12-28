<?php
/**
 * Template part for FBO sections scroll animations
 *
 * @package SkySouth_Website
 */
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animation observer for FBO content elements
    const fboContent = document.querySelectorAll('.fbo-content');
    const fboImages = document.querySelectorAll('.fbo-image');

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
    fboContent.forEach(content => {
        contentObserver.observe(content);
    });

    // Observe image elements
    fboImages.forEach(image => {
        contentObserver.observe(image);
    });
});
</script>
