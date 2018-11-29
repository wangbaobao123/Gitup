<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2018/11/29
 * Time: 19:14
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
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
<!--使用ActiveForm重新构造表单，使表单和模型发生关联-->
<?php $form=ActiveForm::begin();?>
    <div class="form-group">
<!--        <lable>标题</lable>-->
<!--        <input type="text" name="title" class="form-control">-->
        <?= $form->field($model, 'title')->textInput();?>
    </div>
    <div class="form-group">
<!--        <lable>内容</lable>-->
<!--        <textarea name="content" id="" cols="15" rows="2" class="form-control"></textarea>-->
        <?= $form->field($model,'content')->textarea(['class'=>'form-control']);?>
    </div>
    <div class="form-group">
<!--        <lable>作者</lable>-->
<!--        <input type="text" name="author" class="form-control">-->
        <?= $form->field($model, 'author')->textInput();?>
    </div>
<!--    <input type="submit" class="btn btn-success" value="添加">-->
<?= Html::submitButton('添加', ['class' => 'btn btn-success btn-sm']) ?>
<?php ActiveForm::end();?>
</body>
</html>

