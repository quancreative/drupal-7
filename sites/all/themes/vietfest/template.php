<?php


/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function vietfest_preprocess_page(&$variables) {
    // This recreate the menu to get any submenu to be available at all time and not just on its parent page.
    $tree = menu_build_tree('main-menu', array('max-depth'=>2));
    // if (function_exists('i18n_menu_localize_tree')) {
        // $tree = i18n_menu_localize_tree($tree);
    // }
//     
    $main_menu = menu_tree_output($tree);
    $active_trail = menu_get_active_trail();
    foreach($active_trail as $trail) 
    {
        if (isset($trail['mlid']) && isset($main_menu[$trail['mlid'] ] )) 
        {
            $main_menu[$trail['mlid']]['#attributes']['class'][] = 'active-trail';
        }
     }
    
    $variables['vietfest_menu'] = $main_menu;
    $variables['vietfest_menu_footer'] = $main_menu;
}

/* Fix the horrid menu_tree theme function to clearfix since most LI's are floated */
function vietfest_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}
