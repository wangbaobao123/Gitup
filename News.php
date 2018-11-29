<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2018/11/29
 * Time: 19:07
 */
namespace frontend\models;
use yii\db\ActiveRecord;
class News extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'title' => '标题',
            'content' => '内容a',
            'author' => '作者'
        ];
    }
}