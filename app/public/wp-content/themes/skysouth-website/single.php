<?php
/**
 * The template for displaying single blog posts
 *
 * @package SkySouth_Website
 */

get_header();
?>

<div class="min-h-screen bg-white">
    <?php while (have_posts()) : the_post(); ?>
        <!-- Featured Image Header -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="relative h-96 overflow-hidden">
                <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                <!-- Title Overlay -->
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-4xl mx-auto">
                            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light text-white mb-4">
                                <?php the_title(); ?>
                            </h1>
                            <div class="flex items-center gap-4 text-white/90">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                                <?php if (has_category()) : ?>
                                    <span>•</span>
                                    <span><?php the_category(', '); ?></span>
                                <?php endif; ?>
                                <span>•</span>
                                <span><?php echo get_the_author(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <!-- No Featured Image - Simple Header -->
            <section class="pt-32 pb-16 bg-gradient-to-b from-gray-50 to-white">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-light mb-6">
                            <?php the_title(); ?>
                        </h1>
                        <div class="flex items-center gap-4 text-muted-foreground">
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                            <?php if (has_category()) : ?>
                                <span>•</span>
                                <span><?php the_category(', '); ?></span>
                            <?php endif; ?>
                            <span>•</span>
                            <span><?php echo get_the_author(); ?></span>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Post Content -->
        <article class="py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="prose prose-lg max-w-none">
                        <?php the_content(); ?>
                    </div>

                    <!-- Tags -->
                    <?php if (has_tag()) : ?>
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <div class="flex flex-wrap gap-2">
                                <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '" class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-gray-100 text-foreground hover:bg-gray-200 transition-colors">' . $tag->name . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Post Navigation -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex justify-between gap-8">
                            <div class="flex-1">
                                <?php
                                $prev_post = get_previous_post();
                                if ($prev_post) :
                                ?>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="group block">
                                        <span class="text-sm text-muted-foreground">Previous Post</span>
                                        <h3 class="font-serif text-xl font-light mt-2 group-hover:text-primary transition-colors">
                                            <?php echo get_the_title($prev_post); ?>
                                        </h3>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="flex-1 text-right">
                                <?php
                                $next_post = get_next_post();
                                if ($next_post) :
                                ?>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="group block">
                                        <span class="text-sm text-muted-foreground">Next Post</span>
                                        <h3 class="font-serif text-xl font-light mt-2 group-hover:text-primary transition-colors">
                                            <?php echo get_the_title($next_post); ?>
                                        </h3>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
