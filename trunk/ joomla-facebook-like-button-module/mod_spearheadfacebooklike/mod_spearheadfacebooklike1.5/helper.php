<?php
/**
 * Spearhead softwares Joomla Facebook Module for Joomla 1.5
 * 
 * @package Spearhead softwares. 
 * @subpackage Modules
 * @link http://www.spearheadsoftwares.com
 * @license GNU/GPL, see http://www.gnu.org/copyleft/gpl.html
 * mod_spearheadfacebooklike is free software.
 * This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

class modSpearheadFacebookLikeHelper
{
	/**
	 * Helper class for Joomla Facebook Like module
	 * 
	 * @param array $params Variable holding all the parameters of the module helper object 
	 * @access public
	 */
	
	public $fbLikeLinkBase = 'http://www.facebook.com/plugins/like.php?';
	
	public function getFacebookLike($params)
	{
		
		$url =  modSpearheadFacebookLikeHelper::autoDiscovery();
		$layout = $params->get('layout_style');
		$show_faces = ($params->get('show_faces')==1)? 'true' : 'false';
		$width = $params->get('width');
		$font = $params->get('font','arial');
		$color_scheme = $params->get('color_scheme');
		$language = $params->get('language');
		$height = $params->get('height');
		$seperator = '&amp;';		
		
		
		$fbLike = '<iframe src="http://www.facebook.com/plugins/like.php?href='.$url.$seperator
				  .'layout='.$layout.$seperator.'show_faces='.$show_faces.$seperator.'width='.$width.$seperator.'action=like&amp;font='.$font.$seperator.'colorscheme='.$color_scheme.$seperator.'height='.$height.$seperator.'language='.$language.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
		
		return $fbLike;
	}
	
	public function autoDiscovery()
	{
		$uri = &JURI::getInstance();
		return urlencode($uri->toString());
	}
}

