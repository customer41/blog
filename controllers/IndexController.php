<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\RegisterForm;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

class IndexController extends BaseController
{
    public function actionDefault()
    {
        return $this->render('default');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionRegister()
    {
        $model = new RegisterForm;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if (!Yii::$app->user->isGuest) {
                Yii::$app->user->logout();
            }
            if ($model->register()) {
                Yii::$app->session->setFlash(
                    'success',
                    'Вы успешно зарегистрировались. Пройдите ' . Html::a('авторизацию', Url::to('/index/login'))
                );
            }
        }
        return $this->render('register', ['model' => $model]);
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}