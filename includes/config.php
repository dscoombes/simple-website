<?php

/**
 * Website configuration
 */
function config($key = '')
{
    $config = [
        'name' => 'Contoso Costume Rentals',
        'site_url' => 'site-url-here',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'services' => 'Services',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'image_path' => 'images',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
