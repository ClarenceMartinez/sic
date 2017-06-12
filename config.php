<?php  

	switch ($_SERVER['SERVER_NAME']) {

	case 'sic-agraria.vh':
		$_config['server']['url'] 			= "http://sic-agraria.vh/";				
		$_config['server']['host'] 			= "C:/xampp/htdocs/sic-agraria/";	
		$_config['bd']['server']  			= "localhost";										
		$_config['bd']['name']	  			= "saweto";								
		$_config['bd']['user']	  			= "root";									
		$_config['bd']['password']			= "";	
		$_config['server']['url_imagenes']  = $_config['server']['host']."assets/images/";
		$_config['server']['web_imagenes']  = "http://sic-agraria.vh/assets/images/";
	break;

}


define('imagenes', $_config['server']['web_imagenes']);
define("_includes_",$_config["server"]["host"]."application/includes/");

?>