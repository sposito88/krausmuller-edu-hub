
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4"><?php echo esc_html(get_theme_mod('benefits_title', 'Por que escolher a KrausMuller Educacional?')); ?></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                <?php echo esc_html(get_theme_mod('benefits_description', 'Oferecemos uma experiência de aprendizado transformadora, voltada para resultados práticos e desenvolvimento profissional.')); ?>
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            // Definindo os benefícios
            $benefits = array(
                array(
                    'icon' => 'fas fa-graduation-cap',
                    'title' => 'Professores Especializados',
                    'description' => 'Nossos cursos são ministrados por especialistas com vasta experiência no mercado corporativo.'
                ),
                array(
                    'icon' => 'fas fa-award',
                    'title' => 'Certificados Reconhecidos',
                    'description' => 'Receba certificados reconhecidos pelo mercado que valorizam seu currículo profissional.'
                ),
                array(
                    'icon' => 'fas fa-book-open',
                    'title' => 'Conteúdo Atualizado',
                    'description' => 'Material didático constantemente atualizado com as últimas tendências do mercado.'
                ),
                array(
                    'icon' => 'fas fa-users',
                    'title' => 'Networking Qualificado',
                    'description' => 'Conecte-se com profissionais e expanda sua rede de contatos corporativos.'
                )
            );
            
            // Iterando através dos benefícios
            foreach ($benefits as $benefit) {
                ?>
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="inline-flex items-center justify-center p-3 bg-kmblue/10 rounded-lg mb-4">
                        <i class="<?php echo esc_attr($benefit['icon']); ?> h-6 w-6 text-kmblue"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2"><?php echo esc_html($benefit['title']); ?></h3>
                    <p class="text-gray-600 text-sm"><?php echo esc_html($benefit['description']); ?></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
