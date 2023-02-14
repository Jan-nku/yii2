<?php

namespace common\models;

/**
 * Team: RollRollTeam
 * Coding by 运开 2012619
 * 团队成员表的模型，存储团队成员的个人信息
 */

/**
 * This is the ActiveQuery class for [[Team]].
 *
 * @see Team
 */
class TeamQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Team[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Team|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
