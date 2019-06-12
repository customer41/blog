<?php

namespace app\modules\admin\controllers;

use app\models\Article;

class DefaultController extends BaseController
{
    public function actionIndex()
    {
        $headers = Article::getAllHeaders();
        return $this->render('index', ['headers' => $headers]);
    }
}
