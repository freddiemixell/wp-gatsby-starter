<?php

require_once get_template_directory() . '/vendor/simple-html-dom/simple_html_dom.php';

$index_path = get_template_directory_uri() . '/app/public/index.html';

$home = file_get_html( $index_path );

echo $home;
