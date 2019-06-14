<?php

/**
 * @var $this yii\web\View
 * @var $article app\models\Article
 */

use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
use \mihaildev\ckeditor\CKEditor;

$this->params['breadcrumbs'][] = ['label' => 'Админ-панель', 'url' => '/admin'];
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => '/admin'];
$this->params['breadcrumbs'][] = 'Новая статья';

?>

<h2>Добавление новой статьи</h2>

<?php $form = ActiveForm::begin(['method' =>'POST', 'action' => 'add']);
    echo $form->field($article, 'title');
    echo $form->field($article, 'body')->widget(CKEditor::class, [
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]);
    echo Html::submitButton('Создать', ['class' => 'btn btn-success']);
    ActiveForm::end();
?>
