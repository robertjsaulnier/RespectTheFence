<?php
require_once(dirname(__FILE__) . "/home.php");
require_once(dirname(__FILE__) . "/story.php");
require_once(dirname(__FILE__) . "/campaign.php");
require_once(dirname(__FILE__) . "/contact.php");
require_once(dirname(__FILE__) . "/media.php");
require_once(dirname(__FILE__) . "/bullying.php");

//Titles
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
//Bodies
const BODY_HOME = 'BODY_HOME';
const BODY_STORY = 'BODY_STORY';
const BODY_CAMPAIGN = 'BODY_CAMPAIGN';
const BODY_CONTACT = 'BODY_CONTACT';
const BODY_MEDIA = 'BODY_MEDIA';
const BODY_BULLYING = 'BODY_BULLYING';

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
    BODY_HOME => $home_en,
    BODY_STORY => $story_en,
    BODY_CAMPAIGN => $campaign_en,
    BODY_CONTACT => $contact_en,
    BODY_MEDIA => $media_en,
    BODY_BULLYING => $bullying_en
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
    BODY_HOME => $home_fr,
    BODY_STORY => $story_fr,
    BODY_CAMPAIGN => $campaign_fr,
    BODY_CONTACT => $contact_fr,
    BODY_MEDIA => $media_fr,
    BODY_BULLYING => $bullying_fr
);

function r($key) {
    global $en;
    global $fr;
    
    $res = (LANG == 'en') ? $en : $fr;
    
    return $res[$key];
}
