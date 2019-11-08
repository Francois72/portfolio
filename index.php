<?php
require "vendor/autoload.php";
use controller\frontend;

try {
    if (isset($_GET['action'])) {

    }
    else {
        $homePage = new Frontend();
		$homePage->viewHomePage(); 
    }
} 
catch(Exception $e) {

}


