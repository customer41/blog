<?php

namespace app\controllers;

use app\models\Article;

class ArticlesController extends BaseController
{
    public function actionOne($id = null)
    {
        $article = Article::findOne(['id' => $id]);
        return $this->render('one', ['article' => $article]);
    }

    public function actionAll()
    {
        $headers = Article::getAllHeaders();
        return $this->render('all', ['headers' => $headers]);
    }
}