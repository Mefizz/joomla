<?php

defined('_JEXEC') or die('Restricted access');


$doc = &JFactory::getDocument();



$phrase = $params->get('phrase');
$timer = $params->get('timer');


require_once dirname(__FILE__) . '/helper.php';
$infa = modInfoUserHelper::getInfo($phrase, $timer);


require(JModuleHelper::getLayoutPath('mod_infouser')); ?>
