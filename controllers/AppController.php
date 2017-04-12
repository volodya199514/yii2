<?php
/**
 * Created by PhpStorm.
 * User: devds
 * Date: 11.04.17
 * Time: 12:42
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>'.print_r($arr, true).'</pre>';
    }
}

