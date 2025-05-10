
<div class="hero-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                    <?php echo esc_html(get_theme_mod('hero_title', 'Transforme sua carreira com a excelência KrausMuller')); ?>
                </h1>
                <p class="text-blue-100 text-lg mb-8 max-w-lg">
                    <?php echo esc_html(get_theme_mod('hero_description', 'Cursos e treinamentos corporativos desenvolvidos por especialistas para impulsionar o seu desenvolvimento profissional e organizacional.')); ?>
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="bg-white text-kmblue hover:bg-gray-100 transition-colors px-4 py-2 rounded">
                        <?php esc_html_e('Conheça nossos cursos', 'krausmuller'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contato'))); ?>" class="text-white border border-white hover:bg-kmblue-light transition-colors px-4 py-2 rounded">
                        <?php esc_html_e('Entre em contato', 'krausmuller'); ?>
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="bg-white rounded-lg shadow-xl p-6 transform rotate-3">
                    <div class="rounded bg-gray-100 p-4 mb-4">
                        <div class="h-4 w-3/4 bg-kmblue rounded"></div>
                    </div>
                    <div class="space-y-3">
                        <div class="h-3 bg-gray-200 rounded"></div>
                        <div class="h-3 bg-gray-200 rounded w-5/6"></div>
                        <div class="h-3 bg-gray-200 rounded"></div>
                        <div class="h-3 bg-gray-200 rounded w-4/6"></div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-xl p-6 -mt-12 ml-12 transform -rotate-6">
                    <div class="rounded bg-gray-100 p-4 mb-4">
                        <div class="h-4 w-2/3 bg-kmblue-light rounded"></div>
                    </div>
                    <div class="space-y-3">
                        <div class="h-3 bg-gray-200 rounded"></div>
                        <div class="h-3 bg-gray-200 rounded w-3/6"></div>
                        <div class="h-3 bg-gray-200 rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
