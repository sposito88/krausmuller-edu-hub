
    <footer class="bg-gray-100 pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-graduation-cap h-8 w-8 mr-2 text-kmblue"></i>
                        <div class="text-xl font-bold text-kmblue">
                            <span class="font-bold"><?php bloginfo('name'); ?></span>
                            <span class="font-normal text-kmblue-light"> Educacional</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm">
                        <?php bloginfo('description'); ?>
                    </p>
                </div>
                
                <div>
                    <h3 class="font-medium text-gray-900 mb-4"><?php esc_html_e('Links Rápidos', 'krausmuller'); ?></h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'space-y-2',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker'         => new KM_Footer_Nav_Walker(),
                    ));
                    ?>
                </div>
                
                <div>
                    <h3 class="font-medium text-gray-900 mb-4"><?php esc_html_e('Cursos', 'krausmuller'); ?></h3>
                    <?php
                    $course_categories = get_terms(array(
                        'taxonomy' => 'categoria_curso',
                        'hide_empty' => true,
                    ));
                    
                    if (!empty($course_categories) && !is_wp_error($course_categories)) {
                        echo '<ul class="space-y-2">';
                        foreach ($course_categories as $category) {
                            echo '<li><a href="' . esc_url(get_term_link($category)) . '" class="text-gray-600 hover:text-kmblue text-sm">' . esc_html($category->name) . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
                
                <div>
                    <h3 class="font-medium text-gray-900 mb-4"><?php esc_html_e('Contato', 'krausmuller'); ?></h3>
                    <ul class="space-y-2">
                        <li class="text-gray-600 text-sm">Email: <?php echo esc_html(get_theme_mod('contact_email', 'educacional@krausmuller.com.br')); ?></li>
                        <li class="text-gray-600 text-sm">Telefone: <?php echo esc_html(get_theme_mod('contact_phone', '+55 (11) 3838-3838')); ?></li>
                        <li class="text-gray-600 text-sm"><?php echo esc_html(get_theme_mod('contact_location', 'São Paulo - SP')); ?></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-200 mt-8 pt-8">
                <p class="text-gray-600 text-sm text-center">
                    © <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?> Educacional. <?php esc_html_e('Todos os direitos reservados.', 'krausmuller'); ?>
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <script>
    (function() {
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    })();
    </script>
</body>
</html>
