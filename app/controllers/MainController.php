<?php

namespace app\controllers;

class MainController extends AppController{

    public function indexAction(){
        $posts = \R::findAll('test');
        //debug($posts);
        $this->setMeta('Главная страница', 'Описание...', 'ключевики');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', ];
        $this->set(compact('name', 'age', 'names', 'posts'));
    }    

}