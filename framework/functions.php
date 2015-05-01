<?php

require_once(TEMPLATEPATH . '/framework/constants.php');



//require_once(TEMPLATEPATH . '/framework/ext/extensions-setup.php');


//require_once(TEMPLATEPATH . '/framework/uoulib/functions.php');


require_once(TEMPLATEPATH . '/framework/theme/functions.php');


require_once(TEMPLATEPATH . '/framework/theme/scripts.php');
require_once(TEMPLATEPATH . '/framework/theme/stylesheet.php');

require_once(TEMPLATEPATH . '/framework/theme/Breadcrumbs.php');


require_once(TEMPLATEPATH . '/framework/admin/functions.php');

require_once(TEMPLATEPATH . '/framework/theme/woo-functions.php');
require_once(TEMPLATEPATH . '/framework/theme/casa-wpml.php');



if(THEME_HAS_PANEL == TRUE){
//require_once(TEMPLATEPATH . '/framework/admin/admin_panel-settings.php');


	if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux/ReduxCore/framework.php' ) ) {
	    require_once( dirname( __FILE__ ) . '/redux/ReduxCore/framework.php' );
	}
	if ( !isset( $casa_option_data ) && file_exists( dirname( __FILE__ ) . '/redux/config/config.php' ) ) {
	    require_once( dirname( __FILE__ ) . '/redux/config/config.php' );
	}


}
