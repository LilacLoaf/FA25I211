<?php

/*
 * Author: Louie Zhu
 * Date: 03/13/2024
 * File: show_error.php
 * Description: this script displays an error message.
 */
require_once dirname(__FILE__) . '/classes/show_error.class.php';

//retrieve the error message from a querystring variable
$message = $_GET['eMsg'];

//create an Error object and then display the error message
$error = new ShowError();
$error->display($message);