<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Contoso Website',
        'site_url' => 'https://fotoshareapp6238.azurewebsites.net',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'image_path' => 'images',
        'version' => 'v3.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
