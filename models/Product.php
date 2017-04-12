<?php
/**
 * Created by PhpStorm.
 * User: devds
 * Date: 12.04.17
 * Time: 10:23
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function getCategoties(){
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }


}