<?php

namespace app\controllers;

use app\models\Article;
use yii\web\NotFoundHttpException;

class ArticlesController extends BaseController
{
    public function actionOne($id = null)
    {
        $article = Article::findOne(['id' => $id]);
        if (null == $article) {
            throw new NotFoundHttpException('Запрашиваемая статья не существует.');
        }
        return $this->render('one', ['article' => $article]);
    }

    public function actionAll()
    {
        $headers = Article::getAllHeaders();
        return $this->render('all', ['headers' => $headers]);
    }
}