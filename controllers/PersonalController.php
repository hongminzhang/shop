<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\models\Personal;
use app\models\Message;
use yii\base\Event;
use app\models\MyClass;
use app\models\MyBehavior;

class PersonalController extends Controller
{
    public function actionIndex(){
//        $personal = new Personal();

//        $event = new Message();
//
//        $event->message = 'messages';
//
//        $this->on(Personal::EVENT_HELLO, [$personal, 'sayHello']);
//
//        $this->on(Personal::EVENT_HELLO, [$personal, 'sayTest']);
//
//        $this->off(Personal::EVENT_HELLO, [$personal, 'sayHello']);

        //类级别处理程序
//        Event::on(Personal::className(), Personal::EVENT_HELLO, function($event){
//            var_dump($event->sender);
//        });
//
////        $this->trigger(Personal::EVENT_HELLO, $event);
//        Event::trigger(Personal::className(), Personal::EVENT_HELLO);

//    Yii::$app->on(Personal::EVENT_HELLO, function($event){
//        echo get_class($event->sender);
//    });
//        Yii::$app->trigger(Personal::EVENT_HELLO, new Event(['sender' => new Personal]));

//        $myClass = new MyClass();
        $personal = new Personal();
        $myBehavior = new MyBehavior();

// Step 3: 将行为绑定到类上
        $personal->attachBehavior('myBehavior', $myBehavior);

// Step 4: 访问行为中的属性和方法，就和访问类自身的属性和方法一样
        echo $personal->property1;
        echo $personal->method1();
        echo $personal->prop1;
        echo $personal->prop2;
//        echo $personal->prop3;
//        echo $personal->prop4;
        echo $personal->foo();
//        echo $personal->bar();
        $b = $personal->getBehaviors('myBehavior2');
        echo $b;exit;
//        $personal = new Personal();
//        $personal->trigger(Personal::EVENT_HELLO);
    }

}