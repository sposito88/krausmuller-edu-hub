
<?php get_header(); ?>

<div class="min-h-screen flex flex-col">
    <main class="flex-grow">
        <?php while (have_posts()) : the_post(); ?>
            
            <?php
            // Obter metadados do curso
            $duracao = get_post_meta(get_the_ID(), '_duracao_curso', true);
            $alunos = get_post_meta(get_the_ID(), '_numero_alunos', true);
            $aulas = get_post_meta(get_the_ID(), '_numero_aulas', true);
            
            // Obter categorias e níveis
            $categories = get_the_terms(get_the_ID(), 'categoria_curso');
            $category_name = !empty($categories) ? $categories[0]->name : '';
            
            $levels = get_the_terms(get_the_ID(), 'nivel_curso');
            $level_name = !empty($levels) ? $levels[0]->name : '';
            ?>
            
            <div class="bg-kmblue text-white py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold mb-6"><?php the_title(); ?></h1>
                            <div class="flex flex-wrap gap-4 mb-6">
                                <?php if ($category_name) : ?>
                                    <span class="bg-white/20 text-white text-sm px-3 py-1 rounded-full">
                                        <?php echo esc_html($category_name); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <?php if ($level_name) : ?>
                                    <span class="bg-white/20 text-white text-sm px-3 py-1 rounded-full">
                                        <?php echo esc_html($level_name); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex flex-wrap gap-8 text-blue-100 mb-8">
                                <?php if ($duracao) : ?>
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span><?php echo esc_html($duracao); ?></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($alunos) : ?>
                                <div class="flex items-center">
                                    <i class="fas fa-users mr-2"></i>
                                    <span><?php echo esc_html($alunos); ?> <?php esc_html_e('alunos', 'krausmuller'); ?></span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($aulas) : ?>
                                <div class="flex items-center">
                                    <i class="fas fa-book-open mr-2"></i>
                                    <span><?php echo esc_html($aulas); ?> <?php esc_html_e('aulas', 'krausmuller'); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                            
                            <a href="#inscricao" class="bg-white text-kmblue hover:bg-gray-100 transition-colors px-6 py-3 rounded inline-block font-medium">
                                <?php esc_html_e('Inscreva-se agora', 'krausmuller'); ?>
                            </a>
                        </div>
                        <div class="hidden lg:block">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'rounded-lg shadow-lg')); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <div class="lg:col-span-2">
                            <div class="bg-white p-8 rounded-lg border border-gray-200 mb-8">
                                <h2 class="text-2xl font-bold mb-6"><?php esc_html_e('Sobre este curso', 'krausmuller'); ?></h2>
                                <div class="prose max-w-none">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            
                            <div class="bg-white p-8 rounded-lg border border-gray-200">
                                <h2 class="text-2xl font-bold mb-6"><?php esc_html_e('O que você vai aprender', 'krausmuller'); ?></h2>
                                
                                <?php 
                                $learning_topics = get_post_meta(get_the_ID(), '_learning_topics', true);
                                if (!empty($learning_topics)) :
                                    $topics = explode("\n", $learning_topics);
                                ?>
                                <ul class="space-y-3">
                                    <?php foreach ($topics as $topic) : ?>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span><?php echo esc_html(trim($topic)); ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php else : ?>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span><?php esc_html_e('Compreender os princípios fundamentais da área', 'krausmuller'); ?></span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span><?php esc_html_e('Aplicar técnicas e metodologias avançadas', 'krausmuller'); ?></span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span><?php esc_html_e('Desenvolver habilidades práticas para o mercado', 'krausmuller'); ?></span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span><?php esc_html_e('Criar estratégias eficientes para resolver problemas complexos', 'krausmuller'); ?></span>
                                    </li>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div id="inscricao">
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 sticky top-24">
                                <h3 class="text-xl font-bold mb-4"><?php esc_html_e('Inscreva-se neste curso', 'krausmuller'); ?></h3>
                                
                                <?php
                                $price = get_post_meta(get_the_ID(), '_curso_price', true);
                                if ($price) : ?>
                                    <p class="text-2xl font-bold text-kmblue mb-6">R$ <?php echo esc_html($price); ?></p>
                                <?php else : ?>
                                    <p class="text-2xl font-bold text-kmblue mb-6">R$ 1.997,00</p>
                                <?php endif; ?>
                                
                                <form class="space-y-4" action="#" method="post">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1"><?php esc_html_e('Nome completo', 'krausmuller'); ?></label>
                                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-kmblue" required>
                                    </div>
                                    
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1"><?php esc_html_e('E-mail', 'krausmuller'); ?></label>
                                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-kmblue" required>
                                    </div>
                                    
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1"><?php esc_html_e('Telefone', 'krausmuller'); ?></label>
                                        <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-kmblue" required>
                                    </div>
                                    
                                    <button type="submit" class="w-full bg-kmblue hover:bg-kmblue-light text-white py-3 px-4 rounded transition-colors">
                                        <?php esc_html_e('Garantir minha vaga', 'krausmuller'); ?>
                                    </button>
                                </form>
                                
                                <div class="mt-6 text-center">
                                    <p class="text-sm text-gray-600"><?php esc_html_e('Ou entre em contato por', 'krausmuller'); ?></p>
                                    <div class="flex justify-center gap-4 mt-2">
                                        <a href="https://wa.me/5511XXXXXXXX" class="text-green-600 hover:text-green-800">
                                            <i class="fab fa-whatsapp text-2xl"></i>
                                        </a>
                                        <a href="mailto:contato@krausmuller.com.br" class="text-gray-600 hover:text-gray-800">
                                            <i class="fas fa-envelope text-2xl"></i>
                                        </a>
                                        <a href="tel:+551138383838" class="text-blue-600 hover:text-blue-800">
                                            <i class="fas fa-phone text-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            // Cursos relacionados
            $related_args = array(
                'post_type' => 'curso',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
                'tax_query' => array(),
            );
            
            if (!empty($categories)) {
                $related_args['tax_query'][] = array(
                    'taxonomy' => 'categoria_curso',
                    'field' => 'term_id',
                    'terms' => wp_list_pluck($categories, 'term_id'),
                );
            }
            
            $related_courses = new WP_Query($related_args);
            
            if ($related_courses->have_posts()) : ?>
            <div class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8"><?php esc_html_e('Cursos relacionados', 'krausmuller'); ?></h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <?php
                        while ($related_courses->have_posts()) {
                            $related_courses->the_post();
                            get_template_part('template-parts/content/course-card');
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
        <?php endwhile; ?>
    </main>
</div>

<?php get_footer(); ?>
