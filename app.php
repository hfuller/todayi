<?php

//complain loudly about errors if we are on dev.
if ( array_shift(explode('.',gethostname())) == "dev" ) {
	error_reporting(-1); ini_set("display_errors","TRUE");
}

//automatically include undefined objects 
require_once('autoloader.php');

