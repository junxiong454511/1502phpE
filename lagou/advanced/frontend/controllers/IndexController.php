<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/14
 * Time: 14:46
 */

namespace frontend\controllers;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial("index");
    }
}