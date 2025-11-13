<?php

/*
 * Author: Louie Zhu
 * Date: 03/09/2024
 * Name: index.php
 * Description: the homepage
 */
require 'vendor/autoload.php';

$toy_controller = new ToyController();

$action = $_GET['action'] ?? 'all';

if ($action == 'all') {
    $toy_controller->all();
} else if ($action == 'error') {
    $message = $_GET['message'] ?? 'We are sorry, but an error has occurred.';
    $toy_controller->error($message);
}else {
    $message = 'invalid action';
    $toy_controller->error($message);
}