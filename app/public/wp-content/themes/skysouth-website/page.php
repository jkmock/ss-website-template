<?php
/**
 * The template for displaying all pages
 *
 * @package SkySouth_Website
 */

get_header();
?>

<div class="min-h-screen bg-white">
    <!-- Page Header -->
    <section class="relative py-32 sm:py-40 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
        <div class="absolute inset-0 bg-[#0a1628] opacity-5"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="font-serif text-5xl sm:text-6xl font-light mb-6 text-[#0a1628]">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </section>

    <!-- Page Content -->
    <section class="py-16 sm:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('prose prose-lg max-w-none'); ?>>
                        <div class="text-lg font-light leading-relaxed text-gray-700">
                            <?php the_content(); ?>
                        </div>

                        <?php
                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links mt-8 pt-8 border-t border-gray-200"><span class="text-sm font-light uppercase tracking-wider text-gray-600">' . __('Pages:', 'skysouth-website') . '</span>',
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
