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
$this->params['breadcrumbs'][] = 'Редактирование';

?>

<h2>Редактирование статьи</h2>

<?php $form = ActiveForm::begin(['method' =>'POST', 'action' => 'edit?id=' . $article->id]);
echo $form->field($article, 'title');
echo $form->field($article, 'body')->widget(CKEditor::class, [
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
]);
echo Html::submitButton('Редактировать', ['class' => 'btn btn-warning']);
ActiveForm::end();
?>