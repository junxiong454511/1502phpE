<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 15:48
 */

namespace backend\controllers;
use yii\web\Controller;

class LoginController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionLogin()
    {
        $arr=\yii::$app->request->post();
        if($arr){
            print_r($arr);die;
        }else{
            return $this->renderPartial('login');
        }

    }

    public  function action(){

    }
}