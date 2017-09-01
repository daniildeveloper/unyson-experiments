<?php

if (!defined('FW')) {
    die('Forbidden. Unyson isnt setuped');
}

$options = array(
    'option_my' => array(
        'type'          => 'wp-editor',

        /**
         * @var  string default value in editor
         */
        'value'         => 'default value',
        'attr'          => array(),
        'label'         => __('Label', 'fw'),
        'desc'          => __('Description', 'fw'),
        'help'          => __('Help tip', 'fw'),

        /**
         * load tinymce
         * @var bool|array
         */
        'tinymce'       => true,

        /**
         * media upload buttons for tinymce
         * @var boolean
         */
        'media_buttons' => true,

        'wpautop'       => true,

        /**
         * additional css styling
         * @var  string description
         */
        'editor_css'    => '',

        'reinit'        => false,

        'size'          => 'small',

        /**
         * editor type: tinymce or html
         *
         * @var  string
         */
        'editor_type'   => 'tinymce',

        /**
         * @var  int set editor height
         */
        'editor_height' => 400,

    ),
);
