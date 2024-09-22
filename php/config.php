<?php

if(strpos($_SERVER['SERVER_NAME'], 'localhost') !== false){
	//---- SEO Path settings-----
  // define('S_EZYCRDPATH', 'https://www.ezycrd.com/');
  define('S_DOMAINPATH','http://localhost/trader-ezycrd/');
  define('S_ROOTPATH', 'c:/xampp/htdocs/trader-ezycrd/');
  define('S_IMGPATH',S_DOMAINPATH.'images/');
  define('S_CSSPATH', S_DOMAINPATH . 'css/'); 
  define('S_JSPATH',S_DOMAINPATH.'js/');
  define('S_INCLUDESPATH',S_ROOTPATH.'php/');

}
?>
