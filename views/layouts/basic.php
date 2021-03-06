<?php

/* @var $this yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\BasicAsset;
use app\assets\BootboxAsset;

BasicAsset::register($this);
BootboxAsset::overrideSystemConfirm();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Yii::$app->name; ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/']],
            ['label' => 'Статьи', 'url' => ['/articles/all']],
            ['label' => 'Администрация', 'url' => ['/admin'], 'visible' => Yii::$app->user->identity->username === 'Admin'],
            ['label' => 'Регистрация', 'url' => ['/index/register'], 'visible' => Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ? (
            ['label' => 'Войти', 'url' => ['/index/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/index/logout'], 'post')
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer centerVertical">
    <div class="container">
        <p>&copy; Блог Александра Попова <?= date('Y') ?></p>
        <p>
            Сайт носит исключительно информационно-развлекательный характер,
            описывает личный опыт автора и не является инструкцией к действиям
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
