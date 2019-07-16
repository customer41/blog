<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $rePassword;

    public function register()
    {
        $user = new MyUser;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = Yii::$app->security->generatePasswordHash($this->password);
        return $user->save();
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'rePassword' => 'Повтор пароля'
        ];
    }

    public function rules()
    {
        return [
            [['username', 'email', 'password', 'rePassword'], 'required'],
            ['username', 'string', 'length' => [3, 20]],
            ['email', 'email'],
            [['password', 'rePassword'], 'string', 'length' => [6, 10]],
            ['rePassword', 'compare', 'compareAttribute' => 'password'],
            ['username', 'unique', 'targetClass' => MyUser::class, 'message' => 'Это имя пользователя уже занято'],
            ['email', 'unique', 'targetClass' => MyUser::class, 'message' => 'Пользователь с таким e-mail уже существует']
        ];
    }
}