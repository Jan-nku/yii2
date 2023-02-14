<?php

namespace backend\models;
/**
 * Team: RollRollTeam
 * Coding by 运开 2012619
 * 军事力量对比表的后台model
 */


/**
 * This is the ActiveQuery class for [[MilitaryComparison]].
 *
 * @see MilitaryComparison
 */
class MilitaryComparisonQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return MilitaryComparison[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return MilitaryComparison|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
