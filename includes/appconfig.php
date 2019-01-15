<?php

/**
 * Web app configuration
 */
function appconfig($key = '')
{
    $appconfig = [
        'name' => 'Contoso Costume Rentals',
        'app_url' => 'app-url-here',
        'pretty_uri' => false,
        'navigation' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'services' => 'Services',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'image_path' => 'images',
    ];

    return isset($appconfig[$key]) ? $appconfig[$key] : null;
}
