<?php

/**
 * @var $this yii\web\View
 * @var $headers array
 */

$this->params['breadcrumbs'][] = 'Админ-панель';
$this->params['breadcrumbs'][] = 'Статьи';

$this->registerJsFile('@web/js/deleteArticle.js', ['depends' => 'yii\web\YiiAsset']);

?>

<h2>Админ-панель</h2>

<section>
    <div class="panel panel-default panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title">Статьи</h1>
        </div>
        <div class="panel-body">
            <form action="admin/articles/add">
                <button type="submit" class="btn btn-success btn-sm">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Новая статья
                </button>
            </form>
            <?php if (!empty($headers)): ?>
                <br>
                <table class="table table-hover table-condensed">
                    <tr>
                        <th>#</th>
                        <th>Название статьи</th>
                        <th>Просмотр статьи</th>
                        <th>Редактирование статьи</th>
                        <th>Удаление статьи</th>
                    </tr>
                    <?php $count = 0; ?>
                    <?php foreach ($headers as $header): ?>
                        <tr>
                            <td><?php echo ++$count; ?></td>
                            <td>&quot;<?php echo $header['title']; ?>&quot;</td>
                            <td>
                                <form action="admin/articles/one">
                                    <button type="submit" class="btn btn-info btn-xs">
                                        <input type="hidden" name="id" id="id" value="<?php echo $header['id']; ?>" />
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Просмотреть
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="admin/articles/edit">
                                    <button type="submit" class="btn btn-warning btn-xs">
                                        <input type="hidden" name="id" value="<?php echo $header['id']; ?>" />
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Редактировать
                                    </button>
                                </form>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-xs" id="deleteArticle">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Удалить
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <br>
                <p>Создайте новую статью.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
