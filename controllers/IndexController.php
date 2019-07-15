<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\MyUser;
use Yii;

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
        $user = new MyUser;
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('MyUser');
            $data['password'] = Yii::$app->security->generatePasswordHash($data['password']);
            $user->attributes = $data;
            if ($user->save()) {
                Yii::$app->user->logout();
                $this->redirect('/index/login');
            }
        }
        return $this->render('register', ['user' => $user]);
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