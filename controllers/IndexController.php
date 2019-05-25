<?php


namespace app\controllers;


class IndexController extends BaseController
{
    public function actionDefault()
    {
        return $this->render('default');
    }
}