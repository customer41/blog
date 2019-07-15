<?php

namespace app\models;

use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;
use Yii;

class MyUser extends MyUserBase implements IdentityInterface
{
    public $rePassword;

    public function rules()
    {
        return ArrayHelper::merge([
            ['username', 'string', 'length' => [3, 20]],
            ['password', 'string', 'length' => [6, 10]],
            ['rePassword', 'required'],
            ['email', 'email'],
            ['rePassword', 'compare', 'compareAttribute' => 'password'],
        ],
            parent::rules());
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['username'] = 'Имя пользователя';
        $labels['password'] = 'Пароль';
        $labels['rePassword'] = 'Повтор пароля';
        return $labels;
    }

    public static function findIdentity($id)
    {
        return MyUser::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return MyUser::findOne(['accessToken' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() == $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }
}