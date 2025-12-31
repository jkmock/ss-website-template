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

        <!-- FBO Services Section -->
        <?php get_template_part('template-parts/fbo-services'); ?>

        <!-- Fleet Section -->
        <?php get_template_part('template-parts/fleet'); ?>

        <!-- Features Section -->
        <?php get_template_part('template-parts/features'); ?>

        <!-- Trusted Services Section -->
        <?php get_template_part('template-parts/trusted-services'); ?>

        <!-- Experience Section -->
        <?php get_template_part('template-parts/experience'); ?>

        <!-- Destinations Section -->
        <?php get_template_part('template-parts/destinations'); ?>
    </main>
</div>

<?php get_footer(); ?>