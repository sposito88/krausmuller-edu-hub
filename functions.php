
<?php
/**
 * KrausMuller Educacional Theme functions and definitions
 */

if ( ! function_exists( 'krausmuller_setup' ) ) {
    function krausmuller_setup() {
        // Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages
        add_theme_support( 'post-thumbnails' );

        // Register menu locations
        register_nav_menus( array(
            'primary' => esc_html__( 'Menu Principal', 'krausmuller' ),
            'footer' => esc_html__( 'Menu Rodapé', 'krausmuller' ),
        ) );

        // Switch default core markup to output valid HTML5
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Add theme support for Custom Logo
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
}
add_action( 'after_setup_theme', 'krausmuller_setup' );

/**
 * Enqueue scripts and styles
 */
function krausmuller_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style( 'krausmuller-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Enqueue Tailwind CSS
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '3.0.0' );
    
    // Enqueue theme scripts
    wp_enqueue_script( 'krausmuller-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );
    
    // Font Awesome for icons
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/a076d05399.js', array(), null, true );

    // Google Fonts - Montserrat
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'krausmuller_scripts' );

/**
 * Register widget areas
 */
function krausmuller_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'krausmuller' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Adicione widgets aqui.', 'krausmuller' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Rodapé', 'krausmuller' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Widgets do rodapé.', 'krausmuller' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'krausmuller_widgets_init' );

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Register Custom Post Types
 */
function krausmuller_register_post_types() {
    // Cursos Custom Post Type
    $labels = array(
        'name'               => _x( 'Cursos', 'post type general name', 'krausmuller' ),
        'singular_name'      => _x( 'Curso', 'post type singular name', 'krausmuller' ),
        'menu_name'          => _x( 'Cursos', 'admin menu', 'krausmuller' ),
        'name_admin_bar'     => _x( 'Curso', 'add new on admin bar', 'krausmuller' ),
        'add_new'            => _x( 'Adicionar Novo', 'curso', 'krausmuller' ),
        'add_new_item'       => __( 'Adicionar Novo Curso', 'krausmuller' ),
        'new_item'           => __( 'Novo Curso', 'krausmuller' ),
        'edit_item'          => __( 'Editar Curso', 'krausmuller' ),
        'view_item'          => __( 'Ver Curso', 'krausmuller' ),
        'all_items'          => __( 'Todos Cursos', 'krausmuller' ),
        'search_items'       => __( 'Buscar Cursos', 'krausmuller' ),
        'parent_item_colon'  => __( 'Cursos Pai:', 'krausmuller' ),
        'not_found'          => __( 'Nenhum curso encontrado.', 'krausmuller' ),
        'not_found_in_trash' => __( 'Nenhum curso encontrado na lixeira.', 'krausmuller' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cursos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'curso', $args );
    
    // Registro das taxonomias para Cursos
    register_taxonomy(
        'categoria_curso',
        'curso',
        array(
            'label' => __( 'Categorias de Curso', 'krausmuller' ),
            'rewrite' => array( 'slug' => 'categoria-curso' ),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
    
    register_taxonomy(
        'nivel_curso',
        'curso',
        array(
            'label' => __( 'Nível', 'krausmuller' ),
            'rewrite' => array( 'slug' => 'nivel-curso' ),
            'hierarchical' => false,
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'krausmuller_register_post_types' );

/**
 * Add custom meta boxes for the curso post type
 */
function krausmuller_add_meta_boxes() {
    add_meta_box(
        'curso_details',
        __( 'Detalhes do Curso', 'krausmuller' ),
        'krausmuller_curso_details_callback',
        'curso',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'krausmuller_add_meta_boxes' );

/**
 * Meta box callback function
 */
function krausmuller_curso_details_callback( $post ) {
    wp_nonce_field( 'krausmuller_save_curso_details', 'krausmuller_curso_details_nonce' );
    
    $duracao = get_post_meta( $post->ID, '_duracao_curso', true );
    $alunos = get_post_meta( $post->ID, '_numero_alunos', true );
    $aulas = get_post_meta( $post->ID, '_numero_aulas', true );
    
    echo '<p>';
    echo '<label for="duracao_curso">' . __( 'Duração do Curso:', 'krausmuller' ) . '</label><br />';
    echo '<input type="text" id="duracao_curso" name="duracao_curso" value="' . esc_attr( $duracao ) . '" placeholder="Ex: 40 horas" style="width:100%" />';
    echo '</p>';
    
    echo '<p>';
    echo '<label for="numero_alunos">' . __( 'Número de Alunos:', 'krausmuller' ) . '</label><br />';
    echo '<input type="number" id="numero_alunos" name="numero_alunos" value="' . esc_attr( $alunos ) . '" style="width:100%" />';
    echo '</p>';
    
    echo '<p>';
    echo '<label for="numero_aulas">' . __( 'Número de Aulas:', 'krausmuller' ) . '</label><br />';
    echo '<input type="number" id="numero_aulas" name="numero_aulas" value="' . esc_attr( $aulas ) . '" style="width:100%" />';
    echo '</p>';
}

/**
 * Save meta box content
 */
function krausmuller_save_meta_box_data( $post_id ) {
    if ( ! isset( $_POST['krausmuller_curso_details_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['krausmuller_curso_details_nonce'], 'krausmuller_save_curso_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['duracao_curso'] ) ) {
        update_post_meta( $post_id, '_duracao_curso', sanitize_text_field( $_POST['duracao_curso'] ) );
    }
    
    if ( isset( $_POST['numero_alunos'] ) ) {
        update_post_meta( $post_id, '_numero_alunos', absint( $_POST['numero_alunos'] ) );
    }
    
    if ( isset( $_POST['numero_aulas'] ) ) {
        update_post_meta( $post_id, '_numero_aulas', absint( $_POST['numero_aulas'] ) );
    }
}
add_action( 'save_post', 'krausmuller_save_meta_box_data' );

/**
 * Define cores personalizadas para o tema
 */
function krausmuller_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'kmblue_color', array(
        'default'           => '#0A3D62',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kmblue_color', array(
        'label'    => __( 'Cor Principal (KMBlue)', 'krausmuller' ),
        'section'  => 'colors',
        'settings' => 'kmblue_color',
    ) ) );
    
    $wp_customize->add_setting( 'kmblue_light_color', array(
        'default'           => '#1B5694',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kmblue_light_color', array(
        'label'    => __( 'Cor Secundária (KMBlue Light)', 'krausmuller' ),
        'section'  => 'colors',
        'settings' => 'kmblue_light_color',
    ) ) );
}
add_action( 'customize_register', 'krausmuller_customize_register' );
