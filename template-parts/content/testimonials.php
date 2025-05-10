
<section class="bg-kmblue py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white mb-4"><?php echo esc_html(get_theme_mod('testimonials_title', 'O que dizem nossos alunos')); ?></h2>
            <p class="text-blue-100 max-w-2xl mx-auto">
                <?php echo esc_html(get_theme_mod('testimonials_description', 'Conheça a experiência de profissionais que transformaram suas carreiras com nossos cursos.')); ?>
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            // Query para buscar depoimentos personalizados
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => 3,
            );
            
            $testimonials_query = new WP_Query($args);
            
            if ($testimonials_query->have_posts()) {
                while ($testimonials_query->have_posts()) {
                    $testimonials_query->the_post();
                    
                    $author = get_post_meta(get_the_ID(), '_testimonial_author', true);
                    $position = get_post_meta(get_the_ID(), '_testimonial_position', true);
                    ?>
                    <div class="bg-white p-6 rounded-lg shadow-md relative">
                        <div class="absolute -top-3 left-6 w-10 h-10 bg-white transform rotate-45"></div>
                        <p class="text-gray-700 mb-6 relative z-10">"<?php the_content(); ?>"</p>
                        <div>
                            <p class="font-semibold text-gray-900"><?php echo esc_html($author); ?></p>
                            <p class="text-gray-600 text-sm"><?php echo esc_html($position); ?></p>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                // Fallback para depoimentos padrão se não houver posts do tipo testimonial
                $default_testimonials = array(
                    array(
                        'content' => 'Os cursos da KrausMuller transformaram minha abordagem em gestão empresarial. O conteúdo prático e atual me ajudou a implementar mudanças significativas na minha empresa.',
                        'author' => 'Marcos Silva',
                        'position' => 'Diretor Executivo, TechSolutions'
                    ),
                    array(
                        'content' => 'A qualidade do material e a expertise dos professores fizeram toda a diferença no meu desenvolvimento profissional. Recomendo fortemente para quem busca excelência.',
                        'author' => 'Ana Paula Mendes',
                        'position' => 'Gerente de Projetos, Construtora Nacional'
                    ),
                    array(
                        'content' => 'O curso de Finanças Corporativas me proporcionou ferramentas valiosas que aplico diariamente. A metodologia é excelente e o networking, extraordinário.',
                        'author' => 'Ricardo Oliveira',
                        'position' => 'CFO, Grupo Inova'
                    )
                );
                
                foreach ($default_testimonials as $testimonial) {
                    ?>
                    <div class="bg-white p-6 rounded-lg shadow-md relative">
                        <div class="absolute -top-3 left-6 w-10 h-10 bg-white transform rotate-45"></div>
                        <p class="text-gray-700 mb-6 relative z-10">"<?php echo esc_html($testimonial['content']); ?>"</p>
                        <div>
                            <p class="font-semibold text-gray-900"><?php echo esc_html($testimonial['author']); ?></p>
                            <p class="text-gray-600 text-sm"><?php echo esc_html($testimonial['position']); ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
