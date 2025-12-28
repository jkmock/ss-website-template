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
    <section class="pt-32 pb-16 bg-[#0a1628]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light mb-4 text-white">
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
                    <div class="text-lg text-white/70 font-light">
                        <?php echo category_description(); ?>
                    </div>
                <?php else : ?>
                    <p class="text-lg text-white/70 font-light">
                        News, insights, and updates from the SkySouth team
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Blog Posts -->
    <main class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <?php if (have_posts()) : ?>
                    <div class="space-y-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="bg-white border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                <div class="grid grid-cols-1 <?php echo has_post_thumbnail() ? 'md:grid-cols-3' : ''; ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <!-- Featured Image -->
                                        <div class="md:col-span-1">
                                            <a href="<?php the_permalink(); ?>" class="block h-full">
                                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover min-h-[250px]')); ?>
                                            </a>
                                        </div>
                                        <!-- Content with Image -->
                                        <div class="md:col-span-2 p-8">
                                    <?php else : ?>
                                        <!-- Content without Image - Full Width -->
                                        <div class="p-8">
                                    <?php endif; ?>
                                        <div class="space-y-4">
                                            <!-- Meta -->
                                            <div class="flex items-center gap-4 text-sm text-gray-600">
                                                <time datetime="<?php echo get_the_date('c'); ?>" class="font-medium">
                                                    <?php echo get_the_date(); ?>
                                                </time>
                                                <?php if (has_category()) : ?>
                                                    <span>•</span>
                                                    <div class="flex gap-2">
                                                        <?php
                                                        $categories = get_the_category();
                                                        foreach ($categories as $category) {
                                                            echo '<span class="inline-block bg-[#0a1628] text-white text-xs px-3 py-1 font-light">' . esc_html($category->name) . '</span>';
                                                        }
                                                        ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <!-- Title -->
                                            <h2 class="font-serif text-3xl font-light text-foreground">
                                                <a href="<?php the_permalink(); ?>" class="hover:text-[#0a1628]/70 transition-colors">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>

                                            <!-- Excerpt -->
                                            <p class="text-foreground/70 font-light leading-relaxed text-lg">
                                                <?php echo has_excerpt() ? wp_trim_words(get_the_excerpt(), 30) : wp_trim_words(get_the_content(), 30); ?>
                                            </p>

                                            <!-- Read More -->
                                            <div class="pt-2">
                                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-[#0a1628] font-medium hover:text-[#0a1628]/70 transition-colors">
                                                    Read Article
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"/>
                                                        <path d="m12 5 7 7-7 7"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center gap-2">
                        <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('← Previous', 'skysouth-website'),
                            'next_text' => __('Next →', 'skysouth-website'),
                            'before_page_number' => '',
                            'class'     => 'flex gap-2',
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <div class="text-center py-16 bg-white border border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mx-auto mb-4 text-gray-400">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                        <p class="text-xl text-gray-600 font-light">No posts found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
