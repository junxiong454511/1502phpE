<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 14:46
 */

namespace frontend\controllers;
use yii\web\Controller;

class LoginController extends Controller{
    public $enableCsrfValidation = false;
    public function actionLogin()
    {
        $arr=\yii::$app->request->post();

        if($arr){
            $email=$arr['email'];
            $pwd=$arr['password'];

        }else{
            return $this->renderPartial("login");
        }

    }
}