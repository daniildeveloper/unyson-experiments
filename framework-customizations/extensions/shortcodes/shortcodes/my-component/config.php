<?php

if (!defined('FW')) {
    die('Forbidden. Unyson isnt setuped');
}
$cfg = array(
    'page_builder' => array(
        'title'       => __('My Component', 'fw'),
        'description' => __('Demo shortcode description', 'fw'),
        'tab'         => __('Demo Elements', '{domain}'),
        'popup_size'  => 'small', // can be large, medium or small
        'icon'        => 'fa fa-btc',
    ),
);
