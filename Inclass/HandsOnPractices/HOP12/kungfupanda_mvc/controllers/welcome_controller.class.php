<?php
/*
 * Author: Louie Zhu
 * Date: 03/09/2024
 * File: welcome_controller.class.php
 * Description: This scripts define the class for the welcome controller; this is the default controller.
 * 
 */

class WelcomeController {
    //put your code here
    public function index(): void
    {
        $view = new WelcomeIndex();
        $view->display();
    }
}