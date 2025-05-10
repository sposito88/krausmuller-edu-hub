
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 md:p-12 rounded-lg shadow-md border border-gray-100">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-center">
                <div class="lg:col-span-3">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        <?php echo esc_html(get_theme_mod('cta_title', 'Pronto para transformar sua carreira?')); ?>
                    </h2>
                    <p class="text-gray-600 mb-6">
                        <?php echo esc_html(get_theme_mod('cta_description', 'Inscreva-se em nossos cursos e tenha acesso a conteúdos exclusivos, professores especializados e uma rede de contatos que vai impulsionar seu desenvolvimento profissional.')); ?>
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="<?php echo get_post_type_archive_link('curso'); ?>" class="bg-kmblue hover:bg-kmblue-light text-white px-6 py-3 rounded transition-colors inline-block">
                            <?php esc_html_e('Explorar Cursos', 'krausmuller'); ?>
                        </a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contato'))); ?>" class="border border-gray-300 hover:border-kmblue text-gray-700 hover:text-kmblue px-6 py-3 rounded transition-colors inline-block">
                            <?php esc_html_e('Fale com um Consultor', 'krausmuller'); ?>
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-2 bg-kmblue rounded-lg p-6">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-white mb-4"><?php esc_html_e('Receba novidades', 'krausmuller'); ?></h3>
                        <p class="text-blue-100 mb-4 text-sm">
                            <?php esc_html_e('Cadastre-se para receber atualizações sobre novos cursos, eventos e conteúdos exclusivos.', 'krausmuller'); ?>
                        </p>
                        <form class="space-y-3" action="#" method="post">
                            <input
                                type="email"
                                placeholder="<?php esc_attr_e('Seu e-mail', 'krausmuller'); ?>"
                                class="w-full px-4 py-2 rounded border border-blue-300 focus:outline-none focus:ring-2 focus:ring-kmblue"
                                required
                            >
                            <button type="submit" class="w-full bg-white text-kmblue hover:bg-gray-100 py-2 px-4 rounded">
                                <?php esc_html_e('Inscrever-se', 'krausmuller'); ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
