<?php

namespace app\models;

use yii\db\Query;

class Article extends ArticleBase
{
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['article_id' => 'id']);
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['title'] = 'Заголовок статьи';
        $labels['body'] = 'Статья';
        return $labels;
    }

    public static function getAllHeaders()
    {
        return (new Query)->select(['id', 'title'])->from('articles')->all();
    }
}