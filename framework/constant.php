<?php

if(!defined('THEME_NAME')){
	define('THEME_NAME', "portfolio");
}
if(!defined('SHORT_NAME')){
	define('SHORT_NAME', "portfolio");
}
if(!defined('THEME_NICE_NAME')){
	define('THEME_NICE_NAME', "porfolio_wp");
}

/*if(!defined('THEME_HAS_PANEL')){
	define('THEME_HAS_PANEL', TRUE);
} */


// js path
if(!defined('Portfolio_JS')){
	define('Portfolio_JS', get_template_directory_uri().'/asstes/js/' );
}
// css path
if(!defined('Portfolio_CSS')){
	define('Portfolio_CSS', get_template_directory_uri().'/assets/css/' );
}

/*imgae path*/

if(!defined('Portfolio_IMAGE')){

	define('Portfolio_IMAGE', get_template_directory_uri().'/assets/img/');
}


?>
