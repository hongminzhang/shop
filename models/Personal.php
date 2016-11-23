<?php

namespace app\models;

use yii\base\Model;

class Personal extends Model
{
    const EVENT_HELLO = 'hello';

    public function sayHello($param){
        echo $param->message.'<br>';
    }

    public static function sayTest($parm){
        echo $parm->message.'<br>';
    }
}