<?php

$request = $_SERVER['REQUEST_URI'];

require_once get_template_directory() . '/vendor/simple-html-dom/simple_html_dom.php';

$define_path = get_template_directory_uri() . "/app/public{$request}index.html";

$route = file_get_html( $define_path );

echo $route;
