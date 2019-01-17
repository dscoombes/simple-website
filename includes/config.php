<?php

/**
 * Web app configuration
 */
function config($key = '')
{
    $config = [
        'name' => 'Contoso Costume Rentals',
        'app_url' => 'http://localhost:38121',
		'graphics'=> true,
    ];

    return isset($config[$key]) ? $config[$key] : null;
}

?>