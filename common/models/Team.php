<?php

namespace common\models;
/**
 * Team: RollRollTeam
 * Coding by 运开 2012619
 * 团队成员表的模型，存储团队成员的个人信息
 */

use Yii;

/**
 * This is the model class for table "{{%team}}".
 *
 * @property string $name
 * @property int $stu_number
 * @property string $introduce
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%team}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'stu_number', 'introduce'], 'required'],
            [['stu_number'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['introduce'], 'string', 'max' => 2000],
            [['stu_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'stu_number' => 'Stu Number',
            'introduce' => 'Introduce',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamQuery(get_called_class());
    }
}
