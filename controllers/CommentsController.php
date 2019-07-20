<?php

namespace app\controllers;

use app\models\Comment;
use yii\web\Controller;

class CommentsController extends Controller
{
    public function actionAdd()
    {
        $comment = new Comment;
        return $this->renderPartial('add', ['comment' => $comment]);
    }
}