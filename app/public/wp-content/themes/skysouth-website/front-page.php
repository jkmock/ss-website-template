<?php
/**
 * The template for displaying the front page (homepage)
 * This ensures your custom homepage design is always shown on the front page
 *
 * @package SkySouth_Website
 */

get_header();
?>

<div class="min-h-screen">
    <!-- Hero Section -->
    <?php get_template_part('template-parts/hero'); ?>

    <!-- Main Content -->
    <main>
        <!-- Features Section -->
        <?php get_template_part('template-parts/features'); ?>

        <!-- Fleet Section -->
        <?php get_template_part('template-parts/fleet'); ?>

        <!-- Luxury Private Jet Travel Section -->
        <?php get_template_part('template-parts/luxury-travel'); ?>

        <!-- Medical Section -->
        <?php get_template_part('template-parts/medical'); ?>

        <!-- FBO Services Section -->
        <?php get_template_part('template-parts/fbo-services'); ?>

        <!-- Trusted Services Section -->
        <?php get_template_part('template-parts/trusted-services'); ?>

        <!-- Experience Section -->
        <?php get_template_part('template-parts/experience'); ?>

        <!-- Destinations Section -->
        <?php get_template_part('template-parts/destinations'); ?>

        <!-- Contact Section -->
        <?php get_template_part('template-parts/contact'); ?>
    </main>
</div>

<?php get_template_part('template-parts/scripts'); ?>

<?php get_footer(); ?>
