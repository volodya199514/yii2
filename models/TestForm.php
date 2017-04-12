<?php
/**
 * Created by PhpStorm.
 * User: devds
 * Date: 11.04.17
 * Time: 16:07
 */

namespace app\models;
use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Імя',
            'email' =>'E-mail',
            'text' =>'Текст повідомлення'
        ];
    }

    public function rules(){
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['name', 'string', 'length'=>[2,5]],
            ['name', 'myRule'],
            ['text', 'safe'],

        ];
    }

    public function myRule($attr){
        if(!in_array($this->$attr, ['hello', 'world'])){
            $this->addError($attr, 'Wrong!');
        }
    }
}