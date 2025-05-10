
<?php
/**
 * Template part for displaying post cards
 */
?>

<article class="overflow-hidden border border-gray-200 hover:shadow-md transition-shadow duration-300 rounded-lg bg-white">
    <div class="relative h-48 overflow-hidden">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-300 hover:scale-105')); ?>
            </a>
        <?php endif; ?>
        <?php
        $categories = get_the_category();
        if (!empty($categories)) : ?>
            <span class="absolute top-4 right-4 bg-kmblue text-white text-xs px-2 py-1 rounded">
                <?php echo esc_html($categories[0]->name); ?>
            </span>
        <?php endif; ?>
    </div>
    <div class="p-6">
        <h3 class="text-lg font-semibold mb-2">
            <a href="<?php the_permalink(); ?>" class="hover:text-kmblue transition-colors">
                <?php the_title(); ?>
            </a>
        </h3>
        
        <div class="flex items-center text-xs text-gray-500 mb-4">
            <span class="flex items-center">
                <i class="far fa-calendar mr-1"></i>
                <?php echo get_the_date(); ?>
            </span>
            <span class="mx-2">•</span>
            <span class="flex items-center">
                <i class="far fa-user mr-1"></i>
                <?php the_author(); ?>
            </span>
        </div>
        
        <p class="text-sm text-gray-600 line-clamp-3 mb-4"><?php echo get_the_excerpt(); ?></p>
        
        <a href="<?php the_permalink(); ?>" class="text-kmblue hover:text-kmblue-light transition-colors text-sm font-medium flex items-center">
            <?php esc_html_e('Ler mais', 'krausmuller'); ?>
            <i class="fas fa-arrow-right ml-1 text-xs"></i>
        </a>
    </div>
</article>
