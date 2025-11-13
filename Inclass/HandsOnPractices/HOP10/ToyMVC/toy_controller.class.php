<?php
/**
 * Author: Jonathan Nguyen
 * Date: 11/4/2025
 * File: toy_controller.class.php
 * Description:
 */

class ToyController {
    private ToyModel $toy_model;
    public function __construct() {
        $this->toy_model = new ToyModel();
    }

    //list all the toys in db
    public function all(): void{
        $toys = $this->toy_model->getToys();
        //if there are no toys to display, show an error message
        if(!$toys){
            $this->error("No Toys found");
            return;
        }
        //create an object of the toyview class
        $view = new ToyView();
        //display all the toys
        $view->display($toys);
    }
    //display error message
    public function error($message):void{
        //create an object of the error class
        $error = new ToyError();
        //display the error page
        $error ->display($message);
    }
}