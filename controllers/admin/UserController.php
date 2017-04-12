<?php

/**
 * Created by PhpStorm.
 * User: devds
 * Date: 11.04.17
 * Time: 12:32
 */

namespace  app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}