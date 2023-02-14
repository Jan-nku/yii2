<?php

/**
 * Team: RollRollTeam
 * Coding by 许健 2013018
 * 新闻检索模型，放置在common\models下，用于前后台共用
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $nid 自增列
 * @property string $content 新闻简介
 * @property string $title 新闻标题
 * @property string $url 新闻链接
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'title', 'url'], 'required'],
            [['content', 'title', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nid' => '自增列',
            'content' => '新闻简介',
            'title' => '新闻标题',
            'url' => '新闻链接',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
