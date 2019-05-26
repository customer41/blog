<?php

namespace app\controllers;

use Yii;
use app\models\Article;

class ArticlesController extends BaseController
{
    public function actionAdd()
    {
        $article = new Article;
        if (Yii::$app->request->isPost) {
            $article->load(Yii::$app->request->post());
            $article->save();
            return $this->redirect('/index/default');
        } else {
            return $this->render('add', ['article' => $article]);
        }
    }

    public function actionOne($id = null)
    {
        $article = Article::findOne(['id' => $id]);
        return $this->render('one', ['article' => $article]);
    }
}