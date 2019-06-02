<?php

/**
 * @var $this yii\web\View
 */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<h2>Админ-панель</h2>

<div class="panel panel-default panel-primary">
    <div class="panel-heading">
        <h1 class="panel-title">Статьи</h1>
    </div>
    <div class="panel-body">
        <?php echo Html::a('Добавление статьи', Url::to(['articles/add'])); ?>
    </div>
</div>