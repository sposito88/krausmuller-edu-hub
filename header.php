
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site min-h-screen flex flex-col">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else { ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                                <i class="fas fa-graduation-cap h-8 w-8 mr-2 text-kmblue"></i>
                                <div class="text-xl font-bold text-kmblue">
                                    <span class="font-bold"><?php bloginfo('name'); ?></span>
                                    <span class="font-normal text-kmblue-light"> Educacional</span>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'flex space-x-8',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker'         => new KM_Nav_Walker(),
                    ));
                    ?>
                    <a href="<?php echo esc_url(home_url('/inscricao')); ?>" class="bg-kmblue hover:bg-kmblue-light text-white px-4 py-2 rounded transition-colors">
                        Inscrever-se
                    </a>
                </div>
                
                <div class="flex md:hidden">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-kmblue focus:outline-none">
                        <span class="sr-only"><?php esc_html_e('Abrir menu principal', 'krausmuller'); ?></span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="flex flex-col space-y-2 px-4 pt-2 pb-4 bg-white">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'flex flex-col space-y-2',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker'         => new KM_Mobile_Nav_Walker(),
                ));
                ?>
                <a href="<?php echo esc_url(home_url('/inscricao')); ?>" class="bg-kmblue hover:bg-kmblue-light text-white px-4 py-2 rounded transition-colors text-center w-full">
                    Inscrever-se
                </a>
            </div>
        </div>
    </header>
