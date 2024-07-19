<?php

function arch_custom_post(){
    $project_label = array(
        'name'     => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'    => __('Add Project', 'textdomain'),
        'edit_item'   => __('Edit Project', 'textdomain'),
        'add_new_item' => __('Add New Project', 'textdomain'),
        'all_items'   => __('Projects', 'textdomain'),
    );
    $project = array(
        'labels' => $project_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('projects', $project);



$service_label = array(
    'name'     => __('Services', 'textdomain'),
    'singular_name' => __('Service', 'textdomain'),
    'add_new'    => __('Add Service', 'textdomain'),
    'edit_item'   => __('Edit Service', 'textdomain'),
    'add_new_item' => __('Add New Service', 'textdomain'),
    'all_items'   => __('Services', 'textdomain'),
);
$service = array(
    'labels' => $service_label,
    'public' => true,
    'capability_type' => 'post',
    'show_ui' => true,
    'supports' => array('title', 'editor')
);
register_post_type('services', $service);


$category_label = array(
    'name'     => __('Categories', 'textdomain'),
    'singular_name' => __('Category', 'textdomain'),
    'add_new'    => __('Add Category', 'textdomain'),
    'edit_item'   => __('Edit Category', 'textdomain'),
    'add_new_item' => __('Add New Category', 'textdomain'),
    'all_items'   => __('Categories', 'textdomain'),
);
$category = array(
    'labels' => $category_label,
    'public' => true,
    'capability_type' => 'post',
    'show_ui' => true,
    'supports' => array('title', 'editor')
);
register_post_type('categories', $category);


$update_label = array(
    'name'     => __('Updates', 'textdomain'),
    'singular_name' => __('Update', 'textdomain'),
    'add_new'    => __('Add Update', 'textdomain'),
    'edit_item'   => __('Edit Update', 'textdomain'),
    'add_new_item' => __('Add New Update', 'textdomain'),
    'all_items'   => __('Updates', 'textdomain'),
);
$update = array(
    'labels' => $update_label,
    'public' => true,
    'capability_type' => 'post',
    'show_ui' => true,
    'supports' => array('title', 'editor')
);
register_post_type('updates', $update);


$recent_label = array(
    'name'     => __('Recents', 'textdomain'),
    'singular_name' => __('Recent', 'textdomain'),
    'add_new'    => __('Add Recent', 'textdomain'),
    'edit_item'   => __('Edit Recent', 'textdomain'),
    'add_new_item' => __('Add New Recent', 'textdomain'),
    'all_items'   => __('Recents', 'textdomain'),
);
$recent = array(
    'labels' => $recent_label,
    'public' => true,
    'capability_type' => 'post',
    'show_ui' => true,
    'supports' => array('title', 'editor')
);
register_post_type('recents', $recent);




}
add_action('init', 'arch_custom_post');