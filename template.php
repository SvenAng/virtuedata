<?php

/**
 * Implements template_preprocess_html().
 */
function virtuedata_preprocess_html(&$variables) {
    $node = menu_get_object();
    if ($node && $node->nid) {
        $variables['theme_hook_suggestions'][] = 'html__' . $node->type;
    }
}

/**
 * Implements template_preprocess_page.
 */
function virtuedata_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function virtuedata_preprocess_node(&$variables) {
}
/**
 * Implements theme_menu_link().
 Sätter speciella classer på level 2
 */
function virtuedata_menu_link(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';

    if ($element['#below']) {
        // Wrap in dropdown-menu.
        unset($element['#below']['#theme_wrappers']);
        $sub_menu = '<ul class="virtuedata-menu-level-2">' . drupal_render($element['#below']) . '</ul>';
    }else{
    // här funkar custom a class
        $variables['element']['#localized_options']['attributes']['class'][] = 'virtuedata-level2-link';
        return theme_menu_link($variables);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
