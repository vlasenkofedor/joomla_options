<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Joomla_Options
 * @autor       Fedor Vlasenko
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// Запрет прямого доступа.
defined('_JEXEC') or die;

class plgSystemJoomla_Options extends JPlugin
{

	public function onAfterInitialise()
	{
		// Если мы в админке - выход.
		if (JFactory::getApplication()->isAdmin()) return;

		// Заменяем базовый класс JHtmlBehavior переопределенным
		if ($this->params->get('disable_mootools', 0) == '1') include 'behavior.php';

		// Заменяем базовый класс HtmlJquery переопределенным
		if ($this->params->get('disable_jquery', 0) == '1') include 'jquery.php';

		// Заменяем базовый класс JHtmlBootstrap переопределенным
		if ($this->params->get('disable_bootstrap', 0) == '1') include 'bootstrap.php';
	}

}	
