<?php
/*
 * If you are using standard passport then user
 *
 * */
return [
    'permissions' => ['index', 'create', 'update', 'destroy'],
    'controller_directory_suffix' => '/v1', // If we want to generate permission for a specific folder
    'exclude' => []
];
