<?php

namespace frontend\models;

/**
 * Team: RollRollTeam
 * Coding by 吕昆娴 2013851
 */

use Yii;

/**
 * This is the model class for table "important".
 *
 * @property string $title 事件名称
 * @property string $datetime 事件日期与时间
 * @property int $tid 自增列
 */
class Important extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'important';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'datetime'], 'required'],
            [['datetime'], 'safe'],
            [['title'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => '事件名称',
            'datetime' => '事件日期与时间',
            'tid' => '事件ID',
        ];
    }
}
