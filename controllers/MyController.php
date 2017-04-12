<?php

namespace app\controllers;

class MyController extends AppController {

    public function actionIndex($id=null){
        $hi = "Hello World!";
        $names = ['Петров', 'Sidirow'];
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost(){

        return 'blog post';
    }
}