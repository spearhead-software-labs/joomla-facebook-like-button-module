<?php
/**
 * Spearhead softwares Joomla Facebook Plugin for Joomla
 *
 * @package Spearhead softwares.
 * @subpackage Plugins
 * @link http://www.spearheadsoftwares.com
 * @license GNU/GPL, see http://www.gnu.org/copyleft/gpl.html
 * mod_spearheadfacebooklike is free software.
 * This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

//no direct access
defined('_JEXEC') or die('Restricted Access');

class plgContentSpearheadfacebooklike extends JPlugin
{
	public function __construct(&$subject, $config)
	{
		parent::__construct(&$subject, $config);
		$this->loadLanguage();
	}
	
	/*
	 * Trigger for on content prepare.
	 * need to listen to more events. commiting stub files now.
	 * */
	public function onContentPrepare($context, &$row, &$params, $page=0)
	{
		
	}
}