<?php
/*
 * Author: Louie Zhu
 * Date: 03/09/2024
 * Name: index.php
 * Description: The homepage
 */
//load application settings
require_once ("application/config.php");

//load autoloader
require_once ("vendor/autoload.php");

//load the displather that dissects a request URL
new Dispatcher();