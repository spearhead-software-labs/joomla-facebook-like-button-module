<?php
/**
 * Spearhead softwares Hello World! Module Entry Point
 * 
 * @package Spearhead softwares first joomla 1.5 module. 
 * @subpackage Modules
 * @link http://www.spearheadsoftwares.com
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

//no direct access
defined('_JEXEC') or die('Restricted Access');

//include helper files
require_once(dirname(__FILE__).DS.'helper.php');

$fbButton = modSpearheadFacebookLikeHelper::getFacebook($params);
require(JModuleHelper::getLayoutPath('mod_spearheadfacebooklike'));
?>
