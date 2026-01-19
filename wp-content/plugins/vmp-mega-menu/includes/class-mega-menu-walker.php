<?php
/**
 * VMP Mega Menu Walker
 * Extends Bootstrap 5 navigation walker to support mega menu functionality
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class VMP_Mega_Menu_Walker extends Walker_Nav_Menu {
    
    /**
     * Start level - opening tag for submenu
     */
    public function start_lvl(&$output, $depth = 0, $args = null) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        
        // Check if parent has mega menu enabled
        $parent_id = $this->get_parent_id();
        $mega_menu_enabled = get_post_meta($parent_id, '_vmp_mega_menu_enabled', true);
        $mega_menu_columns = get_post_meta($parent_id, '_vmp_mega_menu_columns', true);
        
        if ($mega_menu_enabled && $depth === 0) {
            // Mega menu dropdown
            $columns = $mega_menu_columns ? intval($mega_menu_columns) : 3;
            $output .= "{$n}{$indent}<div class=\"dropdown-menu mega-menu mega-menu-columns-{$columns}\" aria-labelledby=\"menu-item-{$parent_id}\">{$n}";
            $output .= "{$indent}{$t}<div class=\"mega-menu-content\">{$n}";
            $output .= "{$indent}{$t}{$t}<div class=\"row\">{$n}";
        } else {
            // Regular dropdown
            $classes = array('dropdown-menu');
            $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
            $output .= "{$n}{$indent}<ul$class_names>{$n}";
        }
    }
    
    /**
     * End level - closing tag for submenu
     */
    public function end_lvl(&$output, $depth = 0, $args = null) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        
        // Check if parent has mega menu enabled
        $parent_id = $this->get_parent_id();
        $mega_menu_enabled = get_post_meta($parent_id, '_vmp_mega_menu_enabled', true);
        
        if ($mega_menu_enabled && $depth === 0) {
            // Close mega menu structure
            $output .= "{$indent}{$t}{$t}</div><!-- .row -->{$n}";
            $output .= "{$indent}{$t}</div><!-- .mega-menu-content -->{$n}";
            $output .= "{$indent}</div><!-- .mega-menu -->{$n}";
        } else {
            // Close regular dropdown
            $output .= "{$indent}</ul>{$n}";
        }
    }
    
    /**
     * Start element - opening tag for menu item
     */
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';
        
        // Get mega menu settings
        $mega_menu_enabled = get_post_meta($item->ID, '_vmp_mega_menu_enabled', true);
        $is_mega_header = get_post_meta($item->ID, '_vmp_mega_menu_header', true);
        
        // Check if we're in a mega menu
        $parent_mega_enabled = false;
        if ($depth > 0 && $item->menu_item_parent) {
            $parent = $this->find_parent_with_mega_menu($item->menu_item_parent);
            if ($parent) {
                $parent_mega_enabled = get_post_meta($parent, '_vmp_mega_menu_enabled', true);
            }
        }
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        // Add nav-item class for Bootstrap
        if ($depth === 0) {
            $classes[] = 'nav-item';
            if ($mega_menu_enabled || in_array('menu-item-has-children', $classes)) {
                $classes[] = 'dropdown';
            }
        }
        
        // Handle mega menu column headers (depth 1 in mega menu)
        if ($parent_mega_enabled && $depth === 1) {
            $classes[] = 'mega-menu-column';
            if ($is_mega_header) {
                $classes[] = 'mega-menu-header';
            }
        }
        
        // Handle mega menu links (depth 2 in mega menu)
        if ($parent_mega_enabled && $depth === 2) {
            $classes[] = 'mega-menu-item';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        // Output opening tag
        if ($parent_mega_enabled && $depth === 1) {
            // Mega menu columns use divs
            $mega_menu_columns = get_post_meta($parent, '_vmp_mega_menu_columns', true);
            $columns = $mega_menu_columns ? intval($mega_menu_columns) : 3;
            $col_class = 'col-md-' . (12 / $columns);
            $output .= $indent . '<div class="' . $col_class . ' mega-menu-column">' . $n;
        } else {
            // Regular menu items use list items
            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
            $id = $id ? ' id="' . esc_attr($id) . '"' : '';
            $output .= $indent . '<li' . $id . $class_names . '>' . $n;
        }
        
        // Build link attributes
        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';
        
        // Add Bootstrap classes to links
        if ($depth === 0) {
            $atts['class'] = 'nav-link';
            if ($mega_menu_enabled || in_array('menu-item-has-children', $classes)) {
                $atts['class'] .= ' dropdown-toggle';
                $atts['data-bs-toggle'] = 'dropdown';
                $atts['aria-expanded'] = 'false';
            }
        } elseif ($parent_mega_enabled && $depth === 1 && $is_mega_header) {
            // Mega menu headers - make non-clickable by default
            $atts['class'] = 'mega-menu-header-link';
            $atts['href'] = '#';
        } elseif ($parent_mega_enabled && $depth >= 1) {
            $atts['class'] = 'mega-menu-link';
        } else {
            $atts['class'] = 'dropdown-item';
        }
        
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        // Build item output
        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        // Handle mega menu column with children
        if ($parent_mega_enabled && $depth === 1 && in_array('menu-item-has-children', $classes)) {
            $item_output .= $n . $indent . $t . '<ul class="mega-menu-list">' . $n;
        }
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    /**
     * End element - closing tag for menu item
     */
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        
        // Check if parent has mega menu enabled
        $parent_mega_enabled = false;
        if ($depth > 0 && $item->menu_item_parent) {
            $parent = $this->find_parent_with_mega_menu($item->menu_item_parent);
            if ($parent) {
                $parent_mega_enabled = get_post_meta($parent, '_vmp_mega_menu_enabled', true);
            }
        }
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        
        // Close mega menu column children list
        if ($parent_mega_enabled && $depth === 1 && in_array('menu-item-has-children', $classes)) {
            $output .= str_repeat($t, $depth + 1) . '</ul>' . $n;
        }
        
        // Close element
        if ($parent_mega_enabled && $depth === 1) {
            $output .= "</div><!-- .mega-menu-column -->{$n}";
        } else {
            $output .= "</li>{$n}";
        }
    }
    
    /**
     * Helper: Get parent ID (stored during traversal)
     */
    private function get_parent_id() {
        return isset($this->parent_item_id) ? $this->parent_item_id : 0;
    }
    
    /**
     * Helper: Find parent with mega menu enabled
     */
    private function find_parent_with_mega_menu($parent_id) {
        $mega_enabled = get_post_meta($parent_id, '_vmp_mega_menu_enabled', true);
        if ($mega_enabled) {
            return $parent_id;
        }
        
        // Check if this item has a parent
        $item = wp_setup_nav_menu_item(get_post($parent_id));
        if ($item && $item->menu_item_parent) {
            return $this->find_parent_with_mega_menu($item->menu_item_parent);
        }
        
        return false;
    }
    
    /**
     * Override display_element to track parent items
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
        if (!$element) {
            return;
        }
        
        $id_field = $this->db_fields['id'];
        
        // Store parent ID for use in start_lvl
        if ($depth === 0) {
            $this->parent_item_id = $element->$id_field;
        }
        
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}
