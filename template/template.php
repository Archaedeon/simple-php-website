<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
    <style type="text/css">
        .wrap { max-width: 1080px; margin: 75px auto; padding: 45px 70px; text-align: left; box-shadow: 0 5px 30px -5px #9da5ab; }
        article { text-align: right; padding: 20px; line-height: 75%; }
    </style>
</head>
<body>
<div class="wrap">

    <header>
        <h2><?php siteName(); ?></h2>
        <nav class="menu">
            <?php navMenu(); ?>
        </nav>
    </header>

    <article>
        <h3><?php pageTitle(); ?></h3>
        <?php pageContent(); ?>
    </article>

    <footer><small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?>.<br><?php siteVersion(); ?></small></footer>

</div>
</body>
</html>
