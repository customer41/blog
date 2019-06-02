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
            return $this->redirect('/admin/default/index');
        } else {
            return $this->render('add', ['article' => $article]);
        }
    }
}