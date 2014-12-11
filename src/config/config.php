<?php
return array(
    'debugging'       => false,
    'caching'         => false,
    'cache_lifetime'  => 120,

    'left_delimiter'  => '{%',
    'right_delimiter' => '%}',

    'template_path'   => app_path('views'),
    'cache_path'      => storage_path('views/cache'),
    'compile_path'    => storage_path('views/compile'),

    // The path to additional Smarty plugins
    'plugins_paths'   => array(
        app_path('libraries/smarty/plugins')
    ),

//    'configs_paths'   => array(
//        public_path('config')
//    )
);
