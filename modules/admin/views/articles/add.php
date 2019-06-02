<?php

/**
 * @var $this yii\web\View
 * @var $article app\models\Article
 */

use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
use \mihaildev\ckeditor\CKEditor;

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
