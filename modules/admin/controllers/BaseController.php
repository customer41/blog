<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;
use yii\web\ForbiddenHttpException;

class BaseController extends Controller
{
    public $layout = 'basic';

    protected function access()
    {
        return Yii::$app->user->identity->username === 'Admin';
    }

    public function beforeAction($action)
    {
        $access = $this->access();
        if ($access && parent::beforeAction($action)) {
            return true;
        } elseif (!$access) {
            throw new ForbiddenHttpException('Доступ в раздел "Администрация" запрещён');
        }
        return false;
    }
}