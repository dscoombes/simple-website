<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php app_name(); ?></title>
    <link href="<?php app_url(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div class="content">

    <header>
        <h1><?php app_name(); ?></h1>
        <nav class="menu">
            <?php navigation(); ?>
        </nav>
    </header>

    <article>
<!-- Uncomment the following line to display image at top of page -->        
<!--    <?php page_image(); ?> -->
        <?php page_content(); ?>
<!-- Uncomment the following line to display image at bottom of page -->           
<!--    <img src="images/generate-image.php" alt='<?php app_name(); ?>' title='<?php app_name(); ?>' width="600" height="100"> -->
    </article>

</div>
</body>
</html>