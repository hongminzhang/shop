<?php

namespace app\modules\forum;

class Module extends \yii\base\Module
{
    public $name = 'zhm';
    public function init()
    {
        parent::init();

        $this->params['foo'] = 'bar';
        // ...  其他初始化代码 ...
    }

    public function index(){

        $module = self::getInstance();
        var_dump($module);

    }
}