
<?php get_header(); ?>

<div class="min-h-screen flex flex-col">
    <main class="flex-grow py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">
                    <?php
                    if (is_post_type_archive('curso')) {
                        echo esc_html(get_theme_mod('courses_archive_title', 'Nossos Cursos'));
                    } elseif (is_category()) {
                        echo single_cat_title('', false);
                    } elseif (is_tag()) {
                        echo single_tag_title('', false);
                    } elseif (is_tax()) {
                        echo single_term_title('', false);
                    } else {
                        echo esc_html(get_the_archive_title());
                    }
                    ?>
                </h1>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    <?php
                    if (is_post_type_archive('curso')) {
                        echo esc_html(get_theme_mod('courses_archive_description', 'Explore nossa seleção de cursos desenvolvidos por especialistas para impulsionar sua carreira e desenvolvimento profissional.'));
                    } else {
                        echo esc_html(get_the_archive_description());
                    }
                    ?>
                </p>
            </div>
            
            <?php if (is_post_type_archive('curso') || is_tax('categoria_curso') || is_tax('nivel_curso')) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            
                            // Incluir o template part para card de curso
                            get_template_part('template-parts/content/course-card');
                        }
                    } else {
                        echo '<p class="text-center col-span-3">' . esc_html__('Nenhum curso encontrado.', 'krausmuller') . '</p>';
                    }
                    ?>
                </div>
            <?php else : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            
                            // Incluir o template part para card de post padrão
                            get_template_part('template-parts/content/post-card');
                        }
                    } else {
                        echo '<p class="text-center col-span-3">' . esc_html__('Nenhum conteúdo encontrado.', 'krausmuller') . '</p>';
                    }
                    ?>
                </div>
            <?php endif; ?>
            
            <div class="mt-8 flex justify-center">
                <?php the_posts_pagination(array(
                    'prev_text' => '&laquo; ' . esc_html__('Anterior', 'krausmuller'),
                    'next_text' => esc_html__('Próximo', 'krausmuller') . ' &raquo;',
                    'class' => 'pagination',
                )); ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
