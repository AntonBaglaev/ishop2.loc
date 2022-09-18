<?php

namespace app\controllers;


class MainController{

    public function __construct($route){
        debug($route);
    }

    public function indexAction(){
        echo __METHOD__;
    }

}