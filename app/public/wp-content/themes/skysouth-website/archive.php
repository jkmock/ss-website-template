<?php
/**
 * The template for displaying archive pages (blog, categories, tags)
 *
 * @package SkySouth_Website
 */

get_header();
?>

<div class="min-h-screen bg-white">
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="font-serif text-4xl sm:text-5xl font-light mb-4">
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_author()) {
                        the_author();
                    } elseif (is_day()) {
                        echo get_the_date();
                    } elseif (is_month()) {
                        echo get_the_date('F Y');
                    } elseif (is_year()) {
                        echo get_the_date('Y');
                    } else {
                        echo 'Blog';
                    }
                    ?>
                </h1>
                <?php if (is_category() && category_description()) : ?>
                    <div class="text-lg text-muted-foreground font-light">
                        <?php echo category_description(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Blog Posts -->
    <main class="py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <?php if (have_posts()) : ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="group">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="block mb-4 overflow-hidden rounded-lg">
                                        <?php the_post_thumbnail('skysouth-featured', array('class' => 'w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105')); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="space-y-3">
                                    <!-- Meta -->
                                    <div class="flex items-center gap-4 text-sm text-muted-foreground">
                                        <time datetime="<?php echo get_the_date('c'); ?>">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                        <?php if (has_category()) : ?>
                                            <span>•</span>
                                            <span><?php the_category(', '); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Title -->
                                    <h2 class="font-serif text-2xl font-light">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <!-- Excerpt -->
                                    <?php if (has_excerpt()) : ?>
                                        <p class="text-foreground/70 font-light leading-relaxed">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                        </p>
                                    <?php endif; ?>

                                    <!-- Read More -->
                                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-medium text-primary hover:text-primary/80 transition-colors">
                                        Read More
                                        <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-16 flex justify-center">
                        <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('&larr; Previous', 'skysouth-website'),
                            'next_text' => __('Next &rarr;', 'skysouth-website'),
                            'class'     => 'flex gap-2',
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <div class="text-center py-16">
                        <p class="text-xl text-muted-foreground">No posts found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
