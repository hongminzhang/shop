<?php
/**
 * Created by PhpStorm.
 * User: j-zhanghongmin
 * Date: 2016/10/28
 * Time: 14:33
 */
namespace app\modules\forum\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $module = \Yii::$app->controller->module;
//        var_dump($module);exit;
       $name = $module->name;
        echo $name;
    }
}