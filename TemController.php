<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2018/11/29
 * Time: 18:12
 */
namespace frontend\controllers;
use yii;
use yii\web\Controller;
class TemController extends Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }
    public function actionAdd()
    {
        $name = yii::$app->request->post('name');
        $pwd= yii::$app->request->post('password');
        $email = yii::$app->request->post('email');
        echo $name,$pwd,$email;
        $sql = "insert into user(name,password,email)value ('$name','$pwd','$email')";
        yii::$app->db->createCommand($sql)->execute();
    }
}