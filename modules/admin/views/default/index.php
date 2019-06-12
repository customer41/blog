<?php

/**
 * @var $this yii\web\View
 * @var $headers array
 */

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
                        <th>Редактировать статью</th>
                        <th>Удалить статью</th>
                    </tr>
                    <?php $count = 0; ?>
                    <?php foreach ($headers as $header): ?>
                        <tr>
                            <td><?php echo ++$count; ?></td>
                            <td><?php echo $header['title']?></td>
                            <td>
                                <form action="admin/articles/edit">
                                    <button type="submit" class="btn btn-warning btn-xs">
                                        <input type="hidden" name="id" value="<?php echo $header['id']; ?>" />
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Редактировать
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="admin/articles/delete">
                                    <button type="submit" class="btn btn-danger btn-xs">
                                        <input type="hidden" name="id" value="<?php echo $header['id']; ?>" />
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</section>
