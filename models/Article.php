<?php

namespace app\models;

use yii\db\Query;

class Article extends ArticleBase
{
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок статьи',
            'body' => 'Статья',
        ];
    }

    public static function getAllHeaders()
    {
        return (new Query)->select(['id', 'title'])->from('articles')->all();
    }
}