<?php


/**
 * Allow page-{slug}.php templates to live in custom directory
 */

  $custom_page_template_directory = 'templates';
  define('PAGE_TEMPLATE_SUB_DIRECTORY', $custom_page_template_directory);

  function add_page_template_subdirectory($templates = array())
  {
    if (empty($templates) || !is_array($templates) || count($templates) < 3)
      return $templates;

    $page_tpl_idx = 0;
    if ($templates[0] === get_page_template_slug()) {
      $page_tpl_idx = 1;
    }

    $page_tpls = array(PAGE_TEMPLATE_SUB_DIRECTORY . '/' . $templates[$page_tpl_idx]);

    if ($templates[$page_tpl_idx] === urldecode($templates[$page_tpl_idx + 1])) {
      $page_tpls[] = PAGE_TEMPLATE_SUB_DIRECTORY . '/' . $templates[$page_tpl_idx + 1];
    }

    array_splice($templates, $page_tpl_idx, 0, $page_tpls);

    return $templates;
  }
  add_filter('page_template_hierarchy', 'add_page_template_subdirectory');


/**
 * Script registration & enqueue
 */

  function enqueue_pressbits_scripts()
  {
    wp_register_script('pressbits-script', get_template_directory_uri() . '/assets/10up/js/script.js');

    wp_enqueue_script('pressbits-script');
    wp_enqueue_style('pressbits-style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'enqueue_pressbits_scripts');
