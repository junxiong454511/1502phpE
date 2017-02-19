<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 15:35
 */

namespace frontend\controllers;
use yii;
use yii\web\Controller;

class ReginController extends Controller
{
    public function actionRegin()
    {
        $arr=\yii::$app->request->post();
        if($arr){
            print_r($arr);die;
        }else{
            return $this->renderPartial("register");
        }

    }
}