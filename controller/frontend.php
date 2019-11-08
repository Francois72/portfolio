<?php
namespace controller;
require "vendor/autoload.php";

class Frontend {

    public function viewHomePage(){
        require('view/frontend/homePage.php');
    }

}