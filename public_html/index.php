<?php
    require_once(dirname(__FILE__) . "/../resources/config.php");

    function getActiveMenu() {
        return $_SERVER[REQUEST_URI] != '/' ? strtolower(substr($_SERVER[REQUEST_URI], 1)) : 'home';
    }

    function activeClass($menu) {
        return getActiveMenu() == $menu ? 'active' : '';
    }

    function getBody() {
        $key = 'BODY_' . strtoupper(getActiveMenu());

        return r($key);
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title><?= r(TITLE_HOME) ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        
        <script src="script/jquery-3.1.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <nav class="navbar navbar-default navbar-inverse">
                    <div class="navbar-header">
                        <a href="http://<?= r(LANG_HOST) . $_SERVER[REQUEST_URI] ?>" class='navbar-brand'><?= r(LANG_LABEL) ?></a>
                    </div>
                </nav>
                <div class="row">
                    <div class="logo col-lg-12">
                        <img src="images/Logo.png" class="logo"/>
                    </div>
                </div>
            </header>
            <nav class="navbar navbar-default menu">
                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="<?= activeClass('home') ?>"><a href="home"><?= r(MENU_HOME) ?></a></li>
                    <li role="presentation" class="<?= activeClass('story') ?>"><a href="story"><?= r(MENU_STORY) ?></a></li>
                    <li role="presentation" class="<?= activeClass('campaign') ?>"><a href="campaign"><?= r(MENU_CAMPAIGN) ?></a></li>
                    <li role="presentation" class="<?= activeClass('contact') ?>"><a href="contact"><?= r(MENU_CONTACT) ?></a></li>
                    <li role="presentation" class="<?= activeClass('media') ?>"><a href="media"><?= r(MENU_MEDIA_LINKS) ?></a></li>
                    <li role="presentation" class="<?= activeClass('bullying') ?>"><a href="bullying"><?= r(MENU_BULLYING_RESOURCES) ?></a></li>
                </ul>
            </nav>
            <div class="row">
                <div class="fence col-md-12 hidden-xs">
                    <img src="images/fence.png"/>
                </div>
            </div>
            <main>
                <?= getBody() ?>
            </main>
        </div>
    </body>
</html>
