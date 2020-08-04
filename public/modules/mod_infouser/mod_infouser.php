<?php

defined('_JEXEC') or die('Restricted access');

// Отримуємо лінк на объект поточного документа
$doc = &JFactory::getDocument();


//Read module params
$phrase = $params->get('phrase');
$timer = $params->get('timer');


require_once dirname(__FILE__) . '/helper.php';
$infa = modInfoUserHelper::getInfo($phrase, $timer);


require(JModuleHelper::getLayoutPath('mod_infouser')); ?>
