<?php

namespace frontend\models;
/**
 * Team: RollRollTeam
 * Coding by 吕昆娴 2013851
 */


use Yii;

/**
 * This is the model class for table "{{%help}}".
 *
 * @property int $hid 自增列
 * @property string $country 援助俄罗斯还是乌克兰
 * @property string $donator 援助方
 * @property string $date 援助时间
 * @property string $kind 援助类型
 */
class Help extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%help}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'donator', 'date', 'kind'], 'required'],
            [['date'], 'safe'],
            [['country'], 'string', 'max' => 64],
            [['donator', 'kind'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'hid' => '援助ID',
            'country' => '援助俄罗斯还是乌克兰',
            'donator' => '援助方',
            'date' => '援助时间',
            'kind' => '援助类型',
        ];
    }
}
