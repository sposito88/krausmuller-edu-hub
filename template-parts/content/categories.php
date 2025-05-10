
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php echo esc_html(get_theme_mod('categories_title', 'Categorias de Cursos')); ?></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                <?php echo esc_html(get_theme_mod('categories_description', 'Explore nosso catálogo diversificado de cursos para encontrar o que melhor atende às suas necessidades profissionais.')); ?>
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $categories = get_terms(array(
                'taxonomy' => 'categoria_curso',
                'hide_empty' => true,
            ));
            
            if (!empty($categories) && !is_wp_error($categories)) {
                $icons = array(
                    'Gestão' => 'fas fa-briefcase',
                    'Finanças' => 'fas fa-chart-line',
                    'Liderança' => 'fas fa-users',
                    'Marketing' => 'fas fa-globe',
                    'Dados' => 'fas fa-chart-bar',
                    'Inovação' => 'fas fa-brain',
                );
                
                $colors = array(
                    'Gestão' => 'bg-blue-100 text-blue-700',
                    'Finanças' => 'bg-green-100 text-green-700',
                    'Liderança' => 'bg-purple-100 text-purple-700',
                    'Marketing' => 'bg-orange-100 text-orange-700',
                    'Dados' => 'bg-red-100 text-red-700',
                    'Inovação' => 'bg-indigo-100 text-indigo-700',
                );
                
                foreach ($categories as $category) {
                    $icon = isset($icons[$category->name]) ? $icons[$category->name] : 'fas fa-book';
                    $color = isset($colors[$category->name]) ? $colors[$category->name] : 'bg-gray-100 text-gray-700';
                    
                    $count = $category->count;
                    ?>
                    <a href="<?php echo esc_url(get_term_link($category)); ?>" class="group bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow flex items-center">
                        <div class="<?php echo esc_attr($color); ?> p-3 rounded-lg mr-4 group-hover:scale-110 transition-transform">
                            <i class="<?php echo esc_attr($icon); ?> h-6 w-6"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-kmblue transition-colors">
                                <?php echo esc_html($category->name); ?>
                            </h3>
                            <p class="text-gray-500 text-sm"><?php echo esc_html($count); ?> <?php echo _n('curso', 'cursos', $count, 'krausmuller'); ?></p>
                        </div>
                    </a>
                    <?php
                }
            } else {
                // Fallback para categorias padrão se não houver categorias de curso
                $default_categories = array(
                    array(
                        'title' => 'Gestão Empresarial',
                        'count' => 8,
                        'icon' => 'fas fa-briefcase',
                        'color' => 'bg-blue-100 text-blue-700'
                    ),
                    array(
                        'title' => 'Finanças Corporativas',
                        'count' => 6,
                        'icon' => 'fas fa-chart-line',
                        'color' => 'bg-green-100 text-green-700'
                    ),
                    array(
                        'title' => 'Liderança',
                        'count' => 5,
                        'icon' => 'fas fa-users',
                        'color' => 'bg-purple-100 text-purple-700'
                    ),
                    array(
                        'title' => 'Marketing Digital',
                        'count' => 4,
                        'icon' => 'fas fa-globe',
                        'color' => 'bg-orange-100 text-orange-700'
                    ),
                    array(
                        'title' => 'Análise de Dados',
                        'count' => 3,
                        'icon' => 'fas fa-chart-bar',
                        'color' => 'bg-red-100 text-red-700'
                    ),
                    array(
                        'title' => 'Inovação',
                        'count' => 4,
                        'icon' => 'fas fa-brain',
                        'color' => 'bg-indigo-100 text-indigo-700'
                    ),
                );
                
                foreach ($default_categories as $cat) {
                    ?>
                    <a href="<?php echo esc_url(home_url('/cursos/')); ?>" class="group bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow flex items-center">
                        <div class="<?php echo esc_attr($cat['color']); ?> p-3 rounded-lg mr-4 group-hover:scale-110 transition-transform">
                            <i class="<?php echo esc_attr($cat['icon']); ?> h-6 w-6"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-kmblue transition-colors">
                                <?php echo esc_html($cat['title']); ?>
                            </h3>
                            <p class="text-gray-500 text-sm"><?php echo esc_html($cat['count']); ?> <?php echo _n('curso', 'cursos', $cat['count'], 'krausmuller'); ?></p>
                        </div>
                    </a>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
