<?php 

define("WEBSITE_TITLE", 'MY SHOP');

//database details
define('DB_NAME', "eshop_db");
define('DB_USER', "root");
define('DB_PASSWORD', "");
 define('THEME','eshop/');
define('DEBUG', true);

if(DEBUG){
    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}