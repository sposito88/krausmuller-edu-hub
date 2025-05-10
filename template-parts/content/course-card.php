
<?php
/**
 * Template part for displaying course cards
 */

// Get course metadata
$duration = get_post_meta(get_the_ID(), '_duracao_curso', true);
$students = get_post_meta(get_the_ID(), '_numero_alunos', true);
$lessons = get_post_meta(get_the_ID(), '_numero_aulas', true);

// Get course category
$categories = get_the_terms(get_the_ID(), 'categoria_curso');
$category_name = !empty($categories) ? $categories[0]->name : 'Geral';

// Get course level
$levels = get_the_terms(get_the_ID(), 'nivel_curso');
$level_name = !empty($levels) ? $levels[0]->name : 'Intermediário';
?>

<div class="overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300 rounded-lg bg-white">
    <div class="relative h-48 overflow-hidden">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-300 hover:scale-105')); ?>
            </a>
        <?php else : ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/course-placeholder.jpg'); ?>" 
                     alt="<?php the_title_attribute(); ?>"
                     class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
            </a>
        <?php endif; ?>
        <span class="absolute top-4 right-4 bg-kmblue text-white text-xs px-2 py-1 rounded">
            <?php echo esc_html($category_name); ?>
        </span>
    </div>
    <div class="p-6">
        <div class="flex justify-between items-start pb-2">
            <h3 class="text-lg font-semibold">
                <a href="<?php the_permalink(); ?>" class="hover:text-kmblue transition-colors">
                    <?php the_title(); ?>
                </a>
            </h3>
            <span class="text-xs font-normal border border-gray-300 rounded px-2 py-1">
                <?php echo esc_html($level_name); ?>
            </span>
        </div>
        <p class="text-sm text-gray-600 line-clamp-2 mb-4"><?php echo get_the_excerpt(); ?></p>
        <div class="flex flex-wrap gap-4 text-gray-500 text-xs mb-4">
            <?php if ($duration) : ?>
            <div class="flex items-center">
                <i class="fas fa-clock mr-1 text-kmblue-light"></i>
                <?php echo esc_html($duration); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($students) : ?>
            <div class="flex items-center">
                <i class="fas fa-users mr-1 text-kmblue-light"></i>
                <?php echo esc_html($students); ?> alunos
            </div>
            <?php endif; ?>
            
            <?php if ($lessons) : ?>
            <div class="flex items-center">
                <i class="fas fa-book-open mr-1 text-kmblue-light"></i>
                <?php echo esc_html($lessons); ?> aulas
            </div>
            <?php endif; ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="block w-full bg-kmblue hover:bg-kmblue-light text-white py-2 px-4 rounded text-center">
            <?php esc_html_e('Saiba Mais', 'krausmuller'); ?>
        </a>
    </div>
</div>
