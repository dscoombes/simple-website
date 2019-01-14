<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
<!-- Uncomment the following line to display image at top of page -->        
<!--    <?php page_image(); ?> -->
        <?php page_content(); ?>
<!-- Uncomment the following line to display image at bottom of page -->           
<!--    <img src="images/generate-image.php" alt='<?php site_name(); ?>' title='<?php site_name(); ?>' width="600" height="100"> -->
    </article>

</div>
</body>
</html>