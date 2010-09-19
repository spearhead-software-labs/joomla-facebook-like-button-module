<?php
/**
 * Spearhead softwares Hello World! Module Entry Point
 * 
 * @package Spearhead softwares first joomla 1.5 module. 
 * @subpackage Modules
 * @author Thomas George
 * @link http://www.spearheadsoftwares.com
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

class modSpearheadFacebookLikeHelper
{
	/**
	 * Helper class for hello world module
	 * 
	 * @param array $params Variable holding all the parameters of the module helper object 
	 * @access public
	 */
	
	public $seperator = '&amp;';
	public $fbLikeLinkBase = 'http://www.facebook.com/plugins/like.php?';
	public $temp = '<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fexample.com%2Fpage%2Fto%2Flike&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>';
	
	function getFacebook()
	{
		return 'Hello World Spearhead.!!!';
	}
}

