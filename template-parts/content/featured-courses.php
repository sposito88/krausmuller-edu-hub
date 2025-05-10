
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php echo esc_html(get_theme_mod('featured_courses_title', 'Cursos em Destaque')); ?></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                <?php echo esc_html(get_theme_mod('featured_courses_description', 'Conheça nossos cursos mais populares desenvolvidos por especialistas para impulsionar o seu desenvolvimento profissional.')); ?>
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $args = array(
                'post_type' => 'curso',
                'posts_per_page' => 3,
                'meta_key' => '_is_featured',
                'meta_value' => '1'
            );
            
            $featured_courses = new WP_Query($args);
            
            if ($featured_courses->have_posts()) {
                while ($featured_courses->have_posts()) {
                    $featured_courses->the_post();
                    
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
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-300 hover:scale-105')); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/course-placeholder.jpg'); ?>" 
                                     alt="<?php the_title_attribute(); ?>"
                                     class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                            <?php endif; ?>
                            <span class="absolute top-4 right-4 bg-kmblue text-white text-xs px-2 py-1 rounded">
                                <?php echo esc_html($category_name); ?>
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start pb-2">
                                <h3 class="text-lg font-semibold"><?php the_title(); ?></h3>
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
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                // Fallback para cursos padrão se não houver cursos em destaque
                $default_courses = array(
                    array(
                        'title' => 'Gestão Empresarial Avançada',
                        'description' => 'Desenvolva habilidades de liderança e gestão para impulsionar o crescimento da sua empresa e equipe.',
                        'category' => 'Gestão',
                        'level' => 'Avançado',
                        'duration' => '40 horas',
                        'students' => 245,
                        'lessons' => 24,
                        'image' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=800&q=80'
                    ),
                    array(
                        'title' => 'Finanças Corporativas',
                        'description' => 'Aprenda a tomar decisões financeiras estratégicas para maximizar o valor da sua empresa.',
                        'category' => 'Finanças',
                        'level' => 'Intermediário',
                        'duration' => '32 horas',
                        'students' => 178,
                        'lessons' => 18,
                        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80'
                    ),
                    array(
                        'title' => 'Liderança e Inovação',
                        'description' => 'Desenvolva as competências necessárias para liderar equipes e fomentar a inovação no ambiente corporativo.',
                        'category' => 'Liderança',
                        'level' => 'Intermediário',
                        'duration' => '24 horas',
                        'students' => 312,
                        'lessons' => 16,
                        'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80'
                    )
                );
                
                foreach ($default_courses as $course) {
                    ?>
                    <div class="overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300 rounded-lg bg-white">
                        <div class="relative h-48 overflow-hidden">
                            <img src="<?php echo esc_url($course['image']); ?>" 
                                 alt="<?php echo esc_attr($course['title']); ?>"
                                 class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                            <span class="absolute top-4 right-4 bg-kmblue text-white text-xs px-2 py-1 rounded">
                                <?php echo esc_html($course['category']); ?>
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start pb-2">
                                <h3 class="text-lg font-semibold"><?php echo esc_html($course['title']); ?></h3>
                                <span class="text-xs font-normal border border-gray-300 rounded px-2 py-1">
                                    <?php echo esc_html($course['level']); ?>
                                </span>
                            </div>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-4"><?php echo esc_html($course['description']); ?></p>
                            <div class="flex flex-wrap gap-4 text-gray-500 text-xs mb-4">
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-1 text-kmblue-light"></i>
                                    <?php echo esc_html($course['duration']); ?>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users mr-1 text-kmblue-light"></i>
                                    <?php echo esc_html($course['students']); ?> alunos
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-book-open mr-1 text-kmblue-light"></i>
                                    <?php echo esc_html($course['lessons']); ?> aulas
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('/cursos')); ?>" class="block w-full bg-kmblue hover:bg-kmblue-light text-white py-2 px-4 rounded text-center">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        
        <div class="mt-12 text-center">
            <a href="<?php echo get_post_type_archive_link('curso'); ?>" class="bg-kmblue hover:bg-kmblue-light text-white px-6 py-3 rounded transition-colors inline-block">
                <?php esc_html_e('Ver todos os cursos', 'krausmuller'); ?>
            </a>
        </div>
    </div>
</section>
