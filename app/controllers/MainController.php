<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController{

    public function indexAction(){
        $posts = \R::findAll('test');
        //debug($posts);
        $this->setMeta('Главная страница', 'Описание...', 'ключевики');
    }    

}