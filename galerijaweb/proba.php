<?php

define("DB_HOST","localhost");
define("DB_USER","tribali_tribali");
define("DB_PASS","sloba123");
define("DB_NAME","tribali_gal");

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn) {
	echo "uspesno konektovano";
}else {
	echo "nije uspelo";
}

