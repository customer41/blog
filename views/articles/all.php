<?php

/**
 * @var $this yii\web\View
 * @var $headers array
 */

use yii\helpers\Html;
use yii\helpers\Url;

$this->params['breadcrumbs'][] = 'Все статьи';

?>

<?php if (!empty($headers)): ?>
    <section>
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Все статьи</h1>
            </div>
            <div class="panel-body">
                <?php foreach ($headers as $header):
                    echo Html::a($header['title'], Url::to(['articles/one', 'id' => $header['id']]))
                    ?>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <div class="alert alert-info" role="alert">Пока нет ни одной статьи.</div>
<?php endif; ?>
