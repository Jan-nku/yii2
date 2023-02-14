<?php

namespace frontend\models;
/**
 * Team: RollRollTeam
 * Coding by 运开 2012619
 */

use Yii;

/**
 * This is the model class for table "{{%military_comparison}}".
 *
 * @property string $country 俄乌
 * @property string $indicator 指标（海陆空、核弹）
 * @property int $count 数量
 * @property float $millions_capita 百万人均拥有量
 */
class MilitaryComparison extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%military_comparison}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'indicator', 'count', 'millions_capita'], 'required'],
            [['count'], 'integer'],
            [['millions_capita'], 'number'],
            [['country', 'indicator'], 'string', 'max' => 255],
            [['country', 'indicator', 'count', 'millions_capita'], 'unique', 'targetAttribute' => ['country', 'indicator', 'count', 'millions_capita']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => '俄乌',
            'indicator' => '指标（海陆空、核弹）',
            'count' => '数量',
            'millions_capita' => '百万人均拥有量',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MilitaryComparisonQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MilitaryComparisonQuery(get_called_class());
    }
}
