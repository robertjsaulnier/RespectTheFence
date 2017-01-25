<?php
    if (!isset($body_en)) {
$body_en = <<<HOME_EN
<div class="row">
    <div class="col-md-12">
        <p>
            The Respect the Fence campaign was born out of my neighbourhood’s experience of intense adult-to-adult bullying, in Cocagne, New Brunswick.
        <p>
            For over four years now, a family in my neighbourhood are carrying out a bullying campaign against their neighbours in order to force them to move. As soon as the behaviour emerged, my neighbourhood intervened. We installed, on my property, a fence to create a buffer zone between the bullies and their victims. It did not work, and it was vandalized in less than two weeks and several times since.
        <p>
            We also called the authorities for help. We did all that was required of us by authorities, but the results we expected never came, even though some of the bullying was criminal in nature. We came to the disappointing conclusion that people who are being bullied at home only have two options: reply in kind or move.
        <p>
            They say « Good fences make good neighbours ». Mine is a witness to the ruthlessness with which these bullies have been able to destroy their neighbours without ever being brought to account.
        <p>
            In addition to the scars of many incidents of vandalism, my fence is now wearing hundreds of ribbons in support of victims of bullying in my neighbourhood and elsewhere. My fence has a mission: to bring awareness to the issue of bullying in our communities and to bring us all together to find solutions. I am convinced that we can develop better tools, and that it is important to address this problem for the health of our communities. I also know, for having lived it, that awareness can go a long way to better use the tools we already have.
        <p>
            Stéphanie Luce 
            Cocagne, NB
        <ul>
            <li>If you want to tie a ribbon on my fence to support our anti-bullying campaign, please contact us, or drop by and visit. It’s free.
        </ul>
    </div>
</div>
HOME_EN;
        
$body_fr = <<<HOME_FR
<div class="row">
    <div class="col-md-12">
        <p>
            The Respect the Fence campaign was born out of my neighbourhood’s experience of intense adult-to-adult bullying, in Cocagne, New Brunswick.
        <p>
            For over four years now, a family in my neighbourhood are carrying out a bullying campaign against their neighbours in order to force them to move. As soon as the behaviour emerged, my neighbourhood intervened. We installed, on my property, a fence to create a buffer zone between the bullies and their victims. It did not work, and it was vandalized in less than two weeks and several times since.
        <p>
            We also called the authorities for help. We did all that was required of us by authorities, but the results we expected never came, even though some of the bullying was criminal in nature. We came to the disappointing conclusion that people who are being bullied at home only have two options: reply in kind or move.
        <p>
            They say « Good fences make good neighbours ». Mine is a witness to the ruthlessness with which these bullies have been able to destroy their neighbours without ever being brought to account.
        <p>
            In addition to the scars of many incidents of vandalism, my fence is now wearing hundreds of ribbons in support of victims of bullying in my neighbourhood and elsewhere. My fence has a mission: to bring awareness to the issue of bullying in our communities and to bring us all together to find solutions. I am convinced that we can develop better tools, and that it is important to address this problem for the health of our communities. I also know, for having lived it, that awareness can go a long way to better use the tools we already have.
        <p>
            Stéphanie Luce 
            Cocagne, NB
        <ul>
            <li>If you want to tie a ribbon on my fence to support our anti-bullying campaign, please contact us, or drop by and visit. It’s free.
        </ul>
    </div>
</div>
HOME_FR;
    }
    
    require_once(dirname(__FILE__) . '/../resources/config.php');
    
    //Title
    const TITLE_HOME = 'TITLE_HOME';
    //Lang
    const LANG_HOST = 'LANG_HOST';
    const LANG_LABEL = 'LANG_LABEL';
    //Menus
    const MENU_HOME = 'MENU_HOME';
    const MENU_STORY = 'MENU_STORY';
    const MENU_CAMPAIGN = 'MENU_CAMPAIGN';
    const MENU_CONTACT = 'MENU_CONTACT';
    const MENU_MEDIA_LINKS = 'MENU_MEDIA_LINKS';
    const MENU_BULLYING_RESOURCES = 'MENU_BULLYING_RESOURCES';
    //Body
    const BODY = 'BODY';

    $en = array(
        TITLE_HOME => 'Respect the Fence',
        LANG_HOST => 'www.respectemacloture.ca',
        LANG_LABEL => 'FRANÇAIS',
        MENU_HOME  => 'HOME',
        MENU_STORY => 'OUR STORY',
        MENU_CAMPAIGN  => 'THE CAMPAIGN',
        MENU_CONTACT  => 'CONTACT',
        MENU_MEDIA_LINKS  => 'MEDIA LINKS',
        MENU_BULLYING_RESOURCES  => 'BULLYING RESOURCES',
        BODY => $body_en
    );

    $fr = array(
        TITLE_HOME => 'Respecter ma cloture',
        LANG_HOST => 'www.respectthefence.ca',
        LANG_LABEL => 'ENGLISH',
        MENU_HOME  => 'ACCEUIL',
        MENU_STORY => 'NOTRE HISTOIRE',
        MENU_CAMPAIGN  => 'CAMPAGNE',
        MENU_CONTACT  => 'CONTACTEZ NOUS',
        MENU_MEDIA_LINKS  => 'LIENS MEDIA',
        MENU_BULLYING_RESOURCES  => 'RESSOURCES D\'INTIMIDATION',
        BODY => $body_fr
    );

    function r($key) {
        global $en;
        global $fr;

        $res = (LANG == 'en') ? $en : $fr;

        return $res[$key];
    }

    function getActiveMenu() {
        return $_SERVER['REQUEST_URI'] != '/' ? strtolower(substr($_SERVER['REQUEST_URI'], 1)) : 'index.php';
    }

    function activeClass($menu) {
        return getActiveMenu() == $menu ? 'active' : '';
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
        <script src="script/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-default navbar-inverse">
                    <div class="navbar-header">
                        <a href="http://<?= r(LANG_HOST) . $_SERVER['REQUEST_URI'] ?>" class="navbar-brand"><?= r(LANG_LABEL) ?></a>
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
                    <li role="presentation" class="<?= activeClass('index.php') ?>"><a href="index.php"><?= r(MENU_HOME) ?></a></li>
                    <li role="presentation" class="<?= activeClass('story.php') ?>"><a href="story.php"><?= r(MENU_STORY) ?></a></li>
                    <li role="presentation" class="<?= activeClass('campaign.php') ?>"><a href="campaign.php"><?= r(MENU_CAMPAIGN) ?></a></li>
                    <li role="presentation" class="<?= activeClass('contact.php') ?>"><a href="contact.php"><?= r(MENU_CONTACT) ?></a></li>
                    <li role="presentation" class="<?= activeClass('media.php') ?>"><a href="media.php"><?= r(MENU_MEDIA_LINKS) ?></a></li>
                    <li role="presentation" class="<?= activeClass('bullying.php') ?>"><a href="bullying.php"><?= r(MENU_BULLYING_RESOURCES) ?></a></li>
                </ul>
            </nav>
            <div class="row">
                <div class="fence col-md-12 hidden-xs">
                    <img src="images/fence.png"/>
                </div>
            </div>
            <main>
                <?= r(BODY) ?>
            </main>
        </div>
    </body>
</html>
