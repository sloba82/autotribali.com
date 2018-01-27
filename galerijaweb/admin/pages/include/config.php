<?php

define("DB_HOST","localhost");
define("DB_USER","tribali_tribali");
define("DB_PASS","sloba123");
define("DB_NAME","tribali_gal");
define ("APP_DIR","/home/tribali/public_html/galerijaweb/admin/pages");




function __autoload ($class) {
	require_once APP_DIR . "/include/".$class.".php";
}

