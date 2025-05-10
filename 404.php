
<?php get_header(); ?>

<div class="min-h-screen flex flex-col">
    <main class="flex-grow flex items-center justify-center py-16">
        <div class="text-center px-4">
            <h1 class="text-6xl font-bold text-kmblue mb-4">404</h1>
            <p class="text-2xl text-gray-700 mb-6"><?php esc_html_e('Página não encontrada', 'krausmuller'); ?></p>
            <p class="text-gray-600 max-w-md mx-auto mb-8">
                <?php esc_html_e('A página que você está procurando pode ter sido removida ou está temporariamente indisponível.', 'krausmuller'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-kmblue hover:bg-kmblue-light text-white px-4 py-2 rounded transition-colors inline-block">
                <?php esc_html_e('Voltar para a página inicial', 'krausmuller'); ?>
            </a>
        </div>
    </main>
</div>

<?php get_footer(); ?>
