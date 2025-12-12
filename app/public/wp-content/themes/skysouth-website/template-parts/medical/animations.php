<?php
/**
 * Template part for medical sections scroll animations
 *
 * @package SkySouth_Website
 */
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animation observer for medical content elements
    const medicalContent = document.querySelectorAll('.medical-content');
    const medicalImages = document.querySelectorAll('.medical-image');

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
    medicalContent.forEach(content => {
        contentObserver.observe(content);
    });

    // Observe image elements
    medicalImages.forEach(image => {
        contentObserver.observe(image);
    });
});
</script>
