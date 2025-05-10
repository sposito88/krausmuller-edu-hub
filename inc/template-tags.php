
<?php
/**
 * Custom template tags for this theme
 */

if (!function_exists('krausmuller_posted_on')) {
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function krausmuller_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            '%s',
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        $byline = sprintf(
            '%s',
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span><span class="byline">' . $byline . '</span>'; // WPCS: XSS OK.
    }
}

/**
 * Custom Navigation Walker for the main menu
 */
class KM_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'text-gray-700 hover:text-kmblue font-medium transition-colors';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Custom Navigation Walker for mobile menu
 */
class KM_Mobile_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'text-gray-700 hover:text-kmblue font-medium block px-3 py-2 rounded-md transition-colors';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . ' onclick="document.getElementById(\'mobile-menu\').classList.add(\'hidden\')">';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Custom Navigation Walker for footer menu
 */
class KM_Footer_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'text-gray-600 hover:text-kmblue text-sm transition-colors';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Generate breadcrumbs
 */
function krausmuller_breadcrumbs() {
    // Set variables for later use
    $home_link        = home_url('/');
    $home_text        = __( 'Home', 'krausmuller' );
    $separator        = '›';
    $breadcrumb_class = 'breadcrumbs';
    $current_before   = '<span class="current">';
    $current_after    = '</span>';
    
    // Start the breadcrumb
    echo '<div class="' . $breadcrumb_class . '">';
    
    // Home link
    echo '<a href="' . $home_link . '">' . $home_text . '</a> ' . $separator . ' ';
    
    // Check if it's a page, post, or other
    if (is_category()) {
        $cat = get_category(get_query_var('cat'), false);
        echo $current_before . $cat->name . $current_after;
    } elseif (is_home()) {
        echo $current_before . get_the_title(get_option('page_for_posts')) . $current_after;
    } elseif (is_page() && !is_front_page()) {
        $parent_id  = get_post_parent();
        $breadcrumbs = array();
        
        if ($parent_id) {
            $breadcrumbs[] = '<a href="' . get_permalink($parent_id) . '">' . get_the_title($parent_id) . '</a> ' . $separator . ' ';
        }
        
        echo implode('', $breadcrumbs);
        echo $current_before . get_the_title() . $current_after;
    } elseif (is_single()) {
        $post_type = get_post_type();
        
        if ($post_type === 'post') {
            $cat = get_the_category();
            if ($cat) {
                $cat = $cat[0];
                echo '<a href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a> ' . $separator . ' ';
            }
        } elseif ($post_type === 'curso') {
            echo '<a href="' . get_post_type_archive_link('curso') . '">' . __('Cursos', 'krausmuller') . '</a> ' . $separator . ' ';
            
            $categories = get_the_terms(get_the_ID(), 'categoria_curso');
            if (!empty($categories)) {
                $category = $categories[0];
                echo '<a href="' . get_term_link($category) . '">' . $category->name . '</a> ' . $separator . ' ';
            }
        }
        
        echo $current_before . get_the_title() . $current_after;
    } elseif (is_tag()) {
        echo $current_before . single_tag_title('', false) . $current_after;
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo $current_before . __('Posts de ', 'krausmuller') . $userdata->display_name . $current_after;
    } elseif (is_404()) {
        echo $current_before . __('Erro 404', 'krausmuller') . $current_after;
    } elseif (is_post_type_archive('curso')) {
        echo $current_before . __('Cursos', 'krausmuller') . $current_after;
    } elseif (is_tax()) {
        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
        
        if (get_query_var('taxonomy') === 'categoria_curso') {
            echo '<a href="' . get_post_type_archive_link('curso') . '">' . __('Cursos', 'krausmuller') . '</a> ' . $separator . ' ';
        }
        
        echo $current_before . $term->name . $current_after;
    }
    
    echo '</div>';
}
