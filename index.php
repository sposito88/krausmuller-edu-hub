
<?php get_header(); ?>

<div class="min-h-screen flex flex-col">
    <main class="flex-grow">
        <?php get_template_part('template-parts/content/hero'); ?>
        
        <?php get_template_part('template-parts/content/categories'); ?>
        
        <?php get_template_part('template-parts/content/featured-courses'); ?>
        
        <?php get_template_part('template-parts/content/benefits'); ?>
        
        <?php get_template_part('template-parts/content/testimonials'); ?>
        
        <?php get_template_part('template-parts/content/call-to-action'); ?>
    </main>
</div>

<?php get_footer(); ?>
