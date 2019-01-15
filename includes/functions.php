<?php

/**
 * Returns the name of the Web app.
 */
function app_name()
{
    echo appconfig('name');
}

/**
 * Returns the Web app URL.
 */
function app_url()
{
    echo appconfig('app_url');
}

/**
 * Page navigation.
 */
function nav_menu($sep = ' | ')
{
    $navigation = '';
    $menu_items = appconfig('navigation');
    foreach ($menu_items as $uri => $name) {
        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
        $url = appconfig('app_url') . '/' . (appconfig('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        
        $navigation .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }

    echo trim($navigation, $sep);
}

/**
 * Returns page title.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Returns page content. 
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path = getcwd() . '/' . appconfig('content_path') . '/' . $page . '.phtml';

    if (! file_exists($path)) {
        $path = getcwd() . '/' . appconfig('content_path') . '/404.phtml';
    }

    echo file_get_contents($path);
}

/**
 * Returns a page-specific image. 
 */
function page_image()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path =  '/' . appconfig('image_path') . '/' . $page . '.png';
  
    echo '<img src='.$path.' />';
   
}

/**
 * Loads page from template.
 */
function init()
{
    require appconfig('template_path') . '/template.php';
}