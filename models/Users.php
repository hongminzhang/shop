<?php
/**
 * Created by PhpStorm.
 * User: j-zhanghongmin
 * Date: 2016/10/27
 * Time: 21:29
 */
namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    const SCENARIO_LOGIN = 'login';
    const SCENARIO_REGISTER = 'register';
    public function scenarios()
    {
        $scenario = parent::scenarios();
        $scenario[self::SCENARIO_LOGIN] = ['username','password'];
        $scenario[self::SCENARIO_REGISTER] = ['username','password','email'];

    }
}