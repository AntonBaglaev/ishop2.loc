<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController{

    public function indexAction(){
        $posts = \R::findAll('test');
        //debug($posts);
        $this->setMeta('Главная страница', 'Описание...', 'ключевики');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', ];
        $cache = Cache::instance();
        //$cache->set('test', $names);
        $cache->delete('test');
        $data = $cache->get('test');
        if(!$data){
            $cache->set('test', $names);
        }
        $this->set(compact('name', 'age', 'names', 'posts'));
    }    

}