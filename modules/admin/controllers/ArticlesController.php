<?php

namespace app\modules\admin\controllers;

use app\models\Article;
use Yii;

class ArticlesController extends BaseController
{
    public function actionAdd()
    {
        $article = new Article;
        if (Yii::$app->request->isPost) {
            $article->load(Yii::$app->request->post());
            $article->save();
            return $this->redirect('/admin');
        } else {
            return $this->render('add', ['article' => $article]);
        }
    }

    public function actionDelete($id = null)
    {
        Article::findOne(['id' => Yii::$app->request->get('id')])->delete();
        return $this->redirect('/admin');
    }

    public function actionEdit($id = null)
    {
        $article = Article::findOne(['id' => $id]);
        if (Yii::$app->request->isPost) {
            $article->load(Yii::$app->request->post());
            $article->save();
            return $this->redirect('/admin');
        } else {
            return $this->render('edit', ['article' => $article]);
        }
    }

    public function actionOne($id = null)
    {
        $article = Article::findOne(['id' => $id]);
        return $this->render('one', ['article' => $article]);
    }
}