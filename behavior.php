<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Joomla_Options
 * @autor        Fedor Vlasenko
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// Запрет прямого доступа.
defined('_JEXEC') or die;

abstract class JHtmlBehavior
{
	public static function __callStatic($_name, $_param)
	{
	}
}
