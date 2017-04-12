<?php
/**
 * Created by PhpStorm.
 * User: devds
 * Date: 11.04.17
 * Time: 12:44
 */

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\TestForm;


class PostController extends AppController
{

    public $layout='basic';

    public function beforeAction($action)
    {
        if($action->id =='index'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){
        if(Yii::$app->request->isAjax){
//            $this->debug($_POST);
          $this->debug(Yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();
        if($model->load(Yii::$app->request->post())){
           // $this->debug(Yii::$app->request->post());
            if($model->validate()){
                Yii::$app->session->setFlash('success', 'дані прийняті');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Помилка');
            }
        }


       return $this->render('test', compact('model'));
    }

    public function actionShow(){
//        $this->layout='basic';
        $this->view->title = 'Одна стаття!';
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'опис сторінки']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'опис сторінки']);

//        $cats = Category::find()->all();
//        $cats = Category::find()->orderBy(['id'=>SORT_DESC])->all();
//        $cats = Category::find()->asArray()->all();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->all();
//        $cats = Category::find()->asArray()->where(['like', 'title' , 'pp'])->all();
//        $cats = Category::find()->asArray()->where(['<=', 'id', 695])->all();
//        $cats = Category::find()->asArray()->where(['<=', 'id', 695])->limit(1)->one();
//        $cats = Category::find()->asArray()->where('parent=691')->count();
//        $cats = Category::findAll(['parent'=>691]);
//        $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";

        $query = "SELECT * FROM categories WHERE title LIKE :search";
        $cats = Category::findBySql($query, [':search'=>'%pp%'])->all();



        return $this->render('show', compact('cats'));
    }
}