<?php

namespace app\models;

class Article extends ArticleBase
{
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок статьи',
            'body' => 'Статья',
        ];
    }
}