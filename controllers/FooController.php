<?php
/**
 * Created by PhpStorm.
 * User: j-zhanghongmin
 * Date: 2016/11/14
 * Time: 21:25
 */
namespace app\components;

use yii\base\Component;
use yii\base\Event;

class Foo extends Component
{
    const EVENT_HELLO = 'hello';

    public function actionBar()
    {
        $this->trigger(self::EVENT_HELLO);
    }

    public static function test(){
        echo 'hello world';
    }
}
$foo = new Foo;

// 处理器是全局函数
$foo->on(Foo::EVENT_HELLO, ['app\compoents\foo', 'test']);

