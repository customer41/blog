<?php

/**
 * @var $this yii\web\View
 * @var $comment app\models\Comment
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin();
echo $form->field($comment, 'text')->textarea(['rows' => 5])->label('Добавить комментарий');
echo Html::submitButton('Добавить', ['class' => 'btn btn-default']);
ActiveForm::end();
