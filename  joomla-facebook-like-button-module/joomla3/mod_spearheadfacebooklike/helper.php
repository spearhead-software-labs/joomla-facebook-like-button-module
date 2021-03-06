<?php
/**
 * Spearhead softwares Joomla Facebook Like Button Module for Joomla 3
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
	
	/**
	 * @name getFacebookLike
	 * @tutorial Calculates and outputs the facebook like button code
	 * @param array $params Variable holding all the parameters of the module helper object 
	 * @access public
	 */	
	public function getFacebookLike($params)
	{
		
		
		// auto discovery is needed for iframe versions only since xfbml detects
		// the current page and attach to the like button automatically.
		// If explicit like_url is specified then it overrides the url taken from
		// auto discovery or from the xfbml 
		// $url is the final url to be attached to the like button.
		
		$auto_discovery = $params->get('auto_discovery');	
		//explicit url variable.
		$like_url = $params->get('like_url','');
		
		if($auto_discovery=='yes')
		{
			$url =  '';
		}
		else 
		{
			$url = $like_url;
		}
		
		$layout = $params->get('layout_style');
		$show_faces = ($params->get('show_faces')==1)? 'true' : 'false';
		$include_share_button = ($params->get('include_share_button')==1)? 'true' : 'false';
		$width = $params->get('width');
		$verb_to_display = $params->get('verb_to_display','like');
		$font = $params->get('font','arial');
		$color_scheme = $params->get('color_scheme');
		$language = $params->get('language','en_US');
		$height = $params->get('height');
		$appId = $params->get('appId');
		$seperator = '&amp;';		
		if($appId)
		{
			$appID ="appId=".$appId;
		}
		
		$document =& JFactory::getDocument();
		
		//some extra url handling.
		$uri = &JURI::getInstance();
		$uriScheme = $uri->getScheme();		
		

		$document->addScript($uriScheme.'://connect.facebook.net/'.$language.'/all.js#xfbml=1'.$seperator.'version=2.4'.$seperator.$appID);
		$fbLike = '<div id="fb-root"></div><div class="fb-like" 
		data-href="'.$url.'" 
		data-layout="'.$layout.'" 
		data-action="'.$verb_to_display.'" 
		data-show-faces="'.$show_faces.'" 
		data-width="'.$width.'"
		data-share="'.$include_share_button.'"></div>';
		
						  
				  
		return $fbLike;
	}

/**
    * @name getStyle
    * @tutorial Sets the style parameters to outer div based on joomla settings are returned
    * @param array $params Variable holding all the parameters of the module helper object
    * @access public
    */
    public function getStyle($params)
    {
    $pos = $params->get('positioning','static');
		$floater = $params->get('floating','none');
		$top = $params->get('top');
		$left = $params->get('left');	
    $width = $params->get('width');
    $height = $params->get('height');
    
    $style = 'style="border:none;';
    if($width){
    $style = $style.' width:'.$width.'px;';
    }
    if($height){
    $style = $style.' height:'.$height.'px;';
    }
    if($top){
    $style = $style.' top:'.$top.'px;';
    }
    if($left){
    $style = $style.' left:'.$left.'px;';
    }
    if($floater){
    $style = $style.' float:'.$floater.';';
    }
    if($pos){
    $style = $style.' position:'.$pos.';';
    }
    $style = $style.'"';
    
    return $style;
    }
    
	/**
	 * @name autoDiscovery
	 * @tutorial Calculates the current url both sef and non sef urls based on joomla settings are returned
	 * @access public
	 */	
	public function autoDiscovery()
	{
		$uri = &JURI::getInstance();
		return $uri->toString();
	}
	
	/**
	* @name generateOgTags
	* @tutorial Generate Open Graph(Og) meta tags for use in facebook like button.
	* @param Array $ogArray
	* @return String $meta Og meta tags.
	* @access public
	*/
	public function generateOgTags($ogArray)
	{
		$meta = null;
		foreach($ogArray as $ogType=>$content)
		{
			$meta .= '<meta property="og:'.$ogType.'" content="'.$content.'" />'."\n";
		}
		return $meta;
	}	
	
	public function copyRight()
	{
		return '<div style="display:none">Powered by Spearhead Software Labs Joomla Facebook Like Button </div>';
	}	
}

