<?php

/**
 * @var $this yii\web\View
 * @var $article app\models\Article
 */

?>

<article>
    <div class="panel panel-default panel-primary">
        <div class="panel-heading">
            <header>
                <h1 class="panel-title">
                    <?php echo $article->title; ?>
                </h1>
            </header>
        </div>
        <div class="panel-body">
            <?php echo $article->body; ?>
        </div>
        <div class="panel-footer">
            <footer>
                <div>
                    Автор: Александр Попов
                </div>
                <time>
                    <?php echo Yii::$app->formatter->asDatetime($article->created); ?>
                </time>
            </footer>
        </div>
    </div>
</article>