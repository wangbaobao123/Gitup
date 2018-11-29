<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2018/11/29
 * Time: 18:17
 */
use yii\helpers\Url;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>欢迎新用户注册</h1>
<form action='<?=Url::to(['tem/add'])?>' method="post">
    <!--防止跨站请求伪造攻击（CSRF攻击）-->
    <input type="hidden" name="_csrf-frontend" value="<?=yii::$app->request->csrfToken;?>">
        <div class="form-group">
            <label>姓名</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label>密码</label>
            <input type="text" name="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <label>邮箱</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        <input type="submit" class="btn btn-success" value="注册">
</form>
</body>
</html>
