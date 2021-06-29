<?php

namespace app\controllers;

use store\Cache;

class MainController extends AppController{

    public function indexAction(){

        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);

        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Mike'];
        $cache = Cache::instance();
        //$cache->set('test', $names);
        $data = $cache->get('test');
        debug($data);
        $this->set(compact('name', 'age' , 'names', 'posts'));
    }
}