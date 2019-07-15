<?php

/* @var $user app\models\MyUser */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->params['breadcrumbs'][] = 'Регистрация';
?>
<div>
    <h1>Регистрация</h1>

    <p>Пожалуйста заполните следующие поля:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

    <?= $form->field($user, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($user, 'email')->textInput() ?>

    <?= $form->field($user, 'password')->passwordInput() ?>

    <?= $form->field($user, 'rePassword')->passwordInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

