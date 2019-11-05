<?php

require_once get_template_directory() . '/vendor/simple-html-dom/simple_html_dom.php';

$request = (string) $_SERVER['REQUEST_URI'];
$length = strlen( $request );

switch ( true ) {
    case $length === 1:
        $define_path = get_template_directory_uri() . "/app/public/index.html";
        break;
    case $length > 1:
        $normalize_request = stripslashes( $request );
        $define_path = get_template_directory_uri() . "/app/public/{$normalize_request}/index.html";
        break;
    default:
        $define_path = get_template_directory_uri() . "/app/public/index.html";
        break;
}

$route = file_get_html( $define_path );

echo $route;
