<?php
/**
 * The main template file
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

        <!-- FBO Services Section -->
        <?php get_template_part('template-parts/fbo-services'); ?>

        <!-- Trusted Services Section -->
        <?php get_template_part('template-parts/trusted-services'); ?>

        <!-- Experience Section -->
        <?php get_template_part('template-parts/experience'); ?>

        <!-- Destinations Section -->
        <?php get_template_part('template-parts/destinations'); ?>
    </main>
</div>

<?php get_footer(); ?>