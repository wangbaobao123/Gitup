<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2018/11/29
 * Time: 19:21
 */
namespace frontend\controllers;
use yii;
use yii\web\Controller;
use frontend\models\News;
class NewsController extends Controller
{
    public function actionAdd()
    {
        $model = new News();
        return $this->render('add',['model'=>$model]);
    }
}